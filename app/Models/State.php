<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class State extends Model
{
    use HasFactory;

    public function donor(){
        return $this->hasOne(Donor::class,"state_id","id");
    }

    protected $table = "states";
}
