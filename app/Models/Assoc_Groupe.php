<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Assoc_Groupe extends Model
{
    use HasFactory;

    public function User(){
        return $this->HasMany(User::class, 'id' );
    }
}
