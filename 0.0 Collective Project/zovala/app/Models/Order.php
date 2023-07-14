<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

    protected $table = "orders";
      protected $primaryKey = "id";
      protected $fillable = ['customer','quantity','price','recieved','completed','amount_paid','tailor','prefered_date','ocasion','details','created_at','updated_at'];
      
      // belong to 
      public function customer(){
return $this->belongsTo(User::class);
 

      }
      public function tailor(){
        return $this->belongsTo(User::class);
         
        
              }
}
