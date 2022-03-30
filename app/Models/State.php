<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class State extends Model
{
    use HasFactory;

    public function donor(){
        return $this->hasMany(Donor::class,"state_id","id");
    }
    public function requester(){
        return $this->hasMany(Requester::class,"state_id","id");
    }
   

    protected $table = "states";
}
