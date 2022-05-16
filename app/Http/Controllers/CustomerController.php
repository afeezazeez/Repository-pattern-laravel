<?php

namespace App\Http\Controllers;

use App\Interfaces\CustomerRepositoryInterface;
use App\Models\Customer;
use App\Repositories\CustomerRepository;
use Illuminate\Http\Request;

class CustomerController extends Controller
{
    protected $customerRepository;

    public function __construct(CustomerRepositoryInterface $customerRepository){
        $this->customerRepository = $customerRepository;
    }


    public function index(){
        return $this->customerRepository->all();
    }

    public function show($customerId){
        return  $this->customerRepository->findById($customerId);
    }



    public function update($customerId){
        $this->customerRepository->update($customerId);
        return redirect()->to('/show/'.$customerId);
     }

     public function destroy($customerId){
        $this->customerRepository->destroy($customerId);
        return redirect()->to('/');
     }


}
