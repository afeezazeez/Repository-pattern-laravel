<?php

namespace App\Repositories;

use App\Models\Customer;

class CustomerRepository
{
    public function all(){
        return Customer::orderBy('name')
        ->where('active',1)->get()
        ->map(function($customer){
            return $this->format($customer);
        });
    }

    public function findById($customerId){
        $customer = Customer::where('id',$customerId)->with('user')->first();
        return $this->format($customer);

    }

    protected function format($customer){
        return [
            'customer_id'=>$customer->id,
            'name'=>$customer->name,
            'email'=>$customer->user->email,
            'last_contacted'=>$customer->user->contacted_at
        ];
    }

}
