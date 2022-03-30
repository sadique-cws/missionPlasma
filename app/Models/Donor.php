<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Donor extends Model
{
    use HasFactory;
    public function state(){
        return $this->hasOne(State::class,"id","state_id");
    }
    public function city(){
        return $this->hasOne(State::class,"id","city_id");
    }
    protected $guarded = [];
}
