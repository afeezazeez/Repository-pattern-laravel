<?php

namespace App\Repositories;

use App\Interfaces\CustomerRepositoryInterface;
use App\Models\Customer;

class CustomerRepository implements CustomerRepositoryInterface
{
    public function all(){
        return Customer::orderBy('name')
        ->where('active',1)->get()
        ->map->format();
    }

    public function findById($customerId){
       return Customer::where('id',$customerId)->with('user')->firstOrFail()->format();
    }


    public function update($customerId){
        $customer = Customer::where('id',$customerId)->firstOrFail();
        $customer->update(request()->only('name'));
    }

    public function destroy($customerId){
        $customer = Customer::where('id',$customerId)->delete();
    }



}
