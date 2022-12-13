<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Model\Paris;

class Evenement extends Model
{
    use HasFactory;

    public function paris(){
        return $this->hasMany(Paris::class, 'id');
    }
    public function challenger1(){
        return $this->hasOne(Challenger::class);
    }
    public function challenger2(){
        return $this->hasOne(Challenger::class);
    }
}
