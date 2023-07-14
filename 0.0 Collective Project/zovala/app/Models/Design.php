<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Design extends Model
{
    use HasFactory;

    protected $table = "designs";
    protected $primaryKey = "id";
    protected $fillable = ['name','base_price','gender','created_at','updated_at'];
    
}
