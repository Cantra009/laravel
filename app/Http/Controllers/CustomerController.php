<?php

namespace App\Http\Controllers;
use App\Customer;
use Illuminate\Http\Request;

class CustomerController extends Controller
{
    //

   

    public function list(){

        $customers=Customer::all();


        // dd($customers);
        // $customers=['khalid','cumer'];




        return view('internals.customers',[
            'customers'=>$customers,
        ]);
    }

    public function store(){

        $data=request()->validate([

            'name'=>'required|min:3',
            'email'=>'required|email'
        ]);

        $customer=new Customer();
        $customer->name=request('name');
        $customer->email=request('email');
        $customer->save();

        return back();


        // dd(request('name'));
    }

    
}
