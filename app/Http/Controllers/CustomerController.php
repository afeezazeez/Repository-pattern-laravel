<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use App\Repositories\CustomerRepository;
use Illuminate\Http\Request;

class CustomerController extends Controller
{


    public function index(){
        return app(CustomerRepository::class)->all();
    }

    public function show($customerId){
        return app(CustomerRepository::class)->findById($customerId);
    }

}
