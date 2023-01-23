<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Evenement;
use App\Models\Challenger;

class EvenementController extends Controller
{
    //

    public function list()
    {
        $evenements = Evenement::all();
        $challengers = Challenger::all();
        return view('/dashboard', [
            'evenements' => $evenements,
            'challengers' => $challengers
            ]);
    }

}
