<?php

namespace App\Http\Controllers\Auth;
use DB;
use Sentinel;
use Centaur\AuthManager;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Centaur\Dispatches\BaseDispatch;

class SessionController extends Controller
{
    /** @var Centaur\AuthManager */
    protected $authManager;

    /**
     * Create a new authentication controller instance.
     *
     * @return void
     */
    public function __construct(AuthManager $authManager)
    {
        $this->middleware('sentinel.guest', ['except' => 'getLogout']);
        $this->authManager = $authManager;
    }

    /**
     * Show the Login Form
     * @return View
     */
    public function getLogin()
    {
        return view('Centaur::auth.login');
    }

    /**
     * Handle a Login Request
     * @param Request $request
     * @return Redirect|Response
     */
    public function postLogin(Request $request)
    {
        if(DB::connection()->getDatabaseName())
        {
            dd('connected successfully to database '.DB::connection()->getDatabaseName());
            echo "connected successfully to database ".DB::connection()->getDatabaseName();
        }else{
            dd('connected successfully to database ".DB::connection()->getDatabaseName()');
        }



        // Validate the Form Data
        $result = $this->validate($request, [
            'email' => 'required',
            'password' => 'required'
        ]);

        // Assemble Login Credentials
        $credentials = [
            'email' => trim($request->get('email')),
            'password' => $request->get('password'),
        ];
        $remember = (bool)$request->get('remember', false);

        // Attempt the Login
        $result = $this->authManager->authenticate($credentials, $remember);

        // Return the appropriate response
        $path = session()->pull('url.intended', route('dashboard'));
        return $result->dispatch($path);
    }

    /**
     * Handle a Logout Request
     * @return Response|Redirect
     */
    public function getLogout(Request $request)
    {
        // Terminate the user's current session.  Passing true as the
        // second parameter kills all of the user's active sessions.
        $result = $this->authManager->logout(null, null);

        // Return the appropriate response
        return $result->dispatch(route('dashboard'));
    }
}
