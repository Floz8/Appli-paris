<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Paris extends Model
{
    use HasFactory;

    public function Evenement(){
        return $this->belongsTo(Evenement::class);
    }
}
