<?php

namespace App\Http\Controllers;

use App\Tbl_due_listing;
use App\Tbl_profile;
use App\Tbl_user;
use Illuminate\Http\Request;
use Validator;
use Hash;
use Session;
use Carbon\Carbon;

class HomeController extends Controller
{
    public function register(Request $request)
    {
        $this->validate($request, [
            'username' => 'required|unique:tbl_users|max:255',
            'password' => 'required | confirmed | min:6',
        ]);

        $pass = Hash::make($request->get('password'));
        $current_time = Carbon::now()->toDateTimeString();

       // dd($current_time);


        $put = new Tbl_user();
        $put->user_role = 'roleA';
        $put->user_password = $pass;
        $put->created_at = $current_time;
        $put->username = $request->get('username');
        $put->save();

        Session::flash('message', "Registration successful, You can now Login..");
        return Redirect('/');
    }

    public function logout(){
        Session::flush();
        return redirect('login');
    }

    public function login_form(Request $request){

        $this->validate($request, [
            'username' => 'required',
            'password' => 'required',
        ]);
        $tests = Tbl_user::where('username',$request->get('username'))->first();
        $pass = $tests->user_password;
        $match = Hash::check( $request->get('password'), $pass);
        if ($tests AND $match) {
            return redirect('home');
        }else{
            Session::flash('message', "Wrong Username or Password");
            return Redirect()->back();
        }


    }

    public function check_debts(Request $request){

        //$listing = new Tbl_due_listing();
        //$listing-> cust_name = $request->customer_name;
        //$listing-> cust_id = $request->customer_id;
        //$listing-> loan_issue_date = $request->loan_issue_date;
        //$listing-> loan_due_date = $request->loan_due_date;
        //$listing-> cust_acno = $request->account_number;
        //$listing-> customer_name = $request->mobile_number;
        //$listing-> loan_amount = $request->loan_amount;
        //$listing-> loan_balance = $request->loan_balance;
        //$listing->save();

        //$profile = new Tbl_profile();
        //$profile -> national_id = $request->national_id;
        //$profile -> batch_numbers = $request->batch_number;
        //$profile -> mobile_number = $request->mobile_number;
        //$profile ->save();

        //Session::flash('message', "A new usser has been created successfully");
        //return Redirect()->back();

    }

    public function check_roles(Request $request){
       
    }
}
