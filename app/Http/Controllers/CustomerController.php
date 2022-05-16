<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use Illuminate\Http\Request;

class CustomerController extends Controller
{
    public function index(){
        return Customer::orderBy('name')
        ->where('active',1)->get()
        ->map(function($customer){
            return [
                'customer_id'=>$customer->id,
                'name'=>$customer->name,
                'email'=>$customer->user->email,
                'last_contacted'=>$customer->user->contacted_at
            ];
        });
    }

}
