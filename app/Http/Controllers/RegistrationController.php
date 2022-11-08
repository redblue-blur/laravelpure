<?php

namespace App\Http\Controllers;

use View;
use Log;

use Illuminate\Http\Request;
use App\Models\Customer; 

class RegistrationController extends Controller
{
    public function index()
    {
        return view('form');
    }
    public function register(Request $request)
    {
        Log::info($request);
        $request->validate(
            [
                'name'=>'required',
                'email'=>'required|email',
                'password'=>"required|confirmed",
                'password_confirmation'=>'required'
            ]
        );
        echo "<pre>";
        print_r($request->all());

        Customer::insert([
            'name' => $request['name'],
            'email' => $request['email'],
            'address' => $request['address'],
            'gender' => $request['gender'],
            'dob' => $request['dob'],
            'password' => md5($request['password']),
        ]);

        return redirect('/customer/view');
    }
    public function view()
    {
        $customers=Customers::all();
        $data =compact('customers');
        return view('customer-view')->with($data);
    }
}
