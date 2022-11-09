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

        Log::info(isset($request['gender']));

        // if(isset())

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
        $customers = Customer::all();
        $data = compact('customers');
        return view('customer-view')->with($data);
    }
    public function delete($id)
    {
        $customer = Customer::find($id);
        if(!is_null($customer)){
            $customer->delete();
        }
        return redirect('customer/view');
    }
    public function edit($id)
    {
        $customer = Customer::find($id);
        if(!is_null($customer)){
            $url = url('/customer/update') ."/". $id;
            $data=compact('custmer');
        }
        return view('register')->with($data);
    }
}
