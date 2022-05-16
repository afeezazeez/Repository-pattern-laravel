<?php

namespace App\Repositories;

use App\Models\Customer;

class CustomerRepository
{
    public function all(){
        return Customer::orderBy('name')
        ->where('active',1)->get()
        ->map->format();
    }

    public function findById($customerId){
       return Customer::where('id',$customerId)->with('user')->firstOrFail()->format();
    }



}
