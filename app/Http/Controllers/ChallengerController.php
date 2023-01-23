<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Challenger;

class ChallengerController extends Controller
{
    //
    
    public function listchallenger()
    {
        $challengers = Challenger::all();
        return view('/dashboard', [
            'challengers' => $challengers,
            ]);
    }
}
