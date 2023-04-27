<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use Illuminate\Http\Request;
use Session;

class CustomerController extends Controller
{
    public function index(){
        return view('front-end.register.register');
    }
    public function newCustomer(Request $request){
        Customer::newCustomer($request);
        return back()->with('message', 'Registered Successfully');
    }

    public function customerLogout(){
        Session::forget('customerId');
        Session::forget('customerName');
        return back();
    }

    public function customerLogin(){
        return view('front-end.login.login');
    }

    public function customerLogInCheck(Request $request){

        $customerInfo = Customer::where('email', $request->user_name)
            ->orWhere('phone', $request->user_name)->first();
        if($customerInfo){
            $existingPassword = $customerInfo->password;
            if (password_verify($request->password, $existingPassword)){
                //the function's 1st parameter will be requested password
                // and the 2nd one will be the encrypted password
                Session::put('customerId', $customerInfo->id);
                Session::put('customerName', $customerInfo->name);
                Session::put('customerEmail', $customerInfo->email);
                Session::put('customerPhone', $customerInfo->phone);
                Session::put('customerImage', $customerInfo->image);
                return redirect('/');
            }
            else{
                return back()->with('message', 'Enter A Valid Password!!');
            }
        }
        else{
            return back()->with('message', 'Enter A Valid Email or Phone!!');
        }
    }
}
