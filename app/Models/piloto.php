<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\nave;

class piloto extends Model
{
    use HasFactory;

    public function naves(){
        return $this->hasMany(nave::class);
    }
}
