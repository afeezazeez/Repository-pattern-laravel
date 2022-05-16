<?php

namespace App\Http\Controllers;

use App\Interfaces\ScanRepositoryInterface;
use App\Models\Customer;
use App\Repositories\ScanRepository;
use Illuminate\Http\Request;

class ScanController extends Controller
{
    protected $scanRepository;

    public function __construct(ScanRepositoryInterface $scanRepository){
        $this->scanRepository = $scanRepository;
    }


    public function scan(){
        return $this->scanRepository->scan();
    }



}
