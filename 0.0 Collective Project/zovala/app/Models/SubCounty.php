<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SubCounty extends Model
{
    use HasFactory;

    protected $table = "subCounty";
    protected $primaryKey = "id";
    protected $fillable = ['name','county_id','created_at','updated_at'];
    
    // belong to 
    public function county(){
return $this->belongsTo(County::class);


}
}
