<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Evenement;

class EvenementController extends Controller
{
    //

    public function list()
    {
        $evenements = Evenement::all();
        return view('/dashboard', [
            'evenements' => $evenements,
            ]);
    }

}
