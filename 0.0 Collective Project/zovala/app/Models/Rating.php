<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Rating extends Model
{
    use HasFactory;
    protected $table = "photos";
    protected $primaryKey = "id";
    protected $fillable = ['user_id','value','comment','created_at','updated_at','order_id'];
     
    //relationships 
    public function users(){
         return $this->hasMany(User::class);
         
    }
    public function orders(){

        return $this->hasMany(Order::class);
        
    }
}
