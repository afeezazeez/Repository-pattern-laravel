<?php

namespace App\Repositories;

use App\Interfaces\ScanRepositoryInterface;
use App\Models\Customer;

class ScanRepository implements ScanRepositoryInterface
{
    public function scan(){
        return "scan it";
    }
}
