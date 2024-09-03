<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Donor extends Model
{
    use HasFactory;

    protected $fillable = [
         'name',
         'phone',
         'address',
         'payment_method_id',
         'amount'
    ];

    public function payment_method(){
      return $this->belongsTo('payment_mathods');
    }
}
