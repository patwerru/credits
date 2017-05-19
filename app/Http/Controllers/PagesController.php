<?php

namespace App\Http\Controllers;

use App\Tbl_due_listing;
use App\Tbl_profile;
use App\Tbl_user;
use Illuminate\Http\Request;
use DB;

class PagesController extends Controller
{
    public function debtors(){
//        $profiles = Tbl_profile::with('due_listing')->get();
        $profiles = Tbl_due_listing::all();
        return view('debtors',[
            'profiles' => $profiles,
        ]);
    }

    public function profiles(){
//        $profiles = Tbl_profile::with('due_listing')->get();
        $profiles = Tbl_profile::all();
        return view('profiles',[
            'profiles' => $profiles,
        ]);
    }

    public function debtor(){
        return view('debtor');
    }

     public function manage(){
        $users = Tbl_user::all();
        return view('manage_users',[
            'users' => $users,
        ]);
    }



    public function home()
    {
        return view('home');
    }

    public function errors()
    {
        return view('errors.503');
    }

    public function registration()
    {
        return view('registration');
    }

    public function login()
    {
        return view('login');
    }


    public function test()
    {

//        try {
//            if(DB::connection()->getPdo()){
//                dd('this is working');
//            }
//        } catch (\Exception $e) {
//            die('no connection');
//        }

        $pat = Tbl_user::all();


        $weru = Tbl_profile::all();


        $patweru = Tbl_due_listing::all();
        dd($patweru);


        try {
            if (DB::connection()->getPdo()) {
                dd('this is working');
            }
        } catch (\Exception $e) {
            die('no connection');
        }
    }


    public function mystery()
    {
        $test = $this->mysTest($a = null, $b = 'testb', $c = 'testc');
        dd($test);
    }

    function mysTest($a, $b, $c)
    {
        $result = null;
        if (strlen(trim($a)) == 0) {
            $result = $c;
        } else {
            if (strtolower(trim($b)) == "n") {
                if (!is_numeric($a)) {
                    $result = $c;
                } else {
                    $result = trim($a);
                }
            } else {

                if (strtolower(trim($b)) == "d") {
                    if (!isdate($a)) {
                        $result = $c;
                    } else {
                        $result = trim($a);
                    }
                } else {
                    $result = $a;
                }
            }
        }
        return $result;
    }

}
