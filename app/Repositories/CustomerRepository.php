<?php

namespace App\Repositories;

use App\Models\Customer;

class CustomerRepository
{
    public function all(){
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

    public function findById($customerId){
        return Customer::find($customerId);
    }

}
