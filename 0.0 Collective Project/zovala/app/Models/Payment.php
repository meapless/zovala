<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Payment extends Model
{
    use HasFactory;

    protected $table = "payments";
      protected $primaryKey = "id";
      protected $fillable = ['user_id','amount','method','pdate','order_id','created_at','updated_at'];
      
      // belong to 
      public function orders(){
return $this->belongsTo(Order::class);
      }
}
