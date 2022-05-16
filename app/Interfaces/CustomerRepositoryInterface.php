<?php
namespace App\Interfaces;

interface CustomerRepositoryInterface{

    public function all();
    public function findById($customerId);
    public function update($customerId);
    public function destroy($customerId);

}


?>
