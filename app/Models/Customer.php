<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    use HasFactory;

    public function user(){
        return $this->belongsTo(User::class);
    }

    public function format(){
        return [
            'customer_id'=>$this->id,
            'name'=>$this->name,
            'email'=>$this->user->email,
            'last_contacted'=>$this->user->contacted_at
        ];
    }
}
