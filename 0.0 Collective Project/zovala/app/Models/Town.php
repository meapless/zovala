<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Town extends Model
{
    use HasFactory;

    protected $table = "towns";
    protected $primaryKey = "id";
    protected $fillable = ['name','lat_long','sc_id','created_at','updated_at'];
    
    // belong to 
    public function subCounty(){
return $this->belongsTo(SubCounty::class);


}}
