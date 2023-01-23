<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Groupe;
use App\Models\Assoc_Groupe;
use Illuminate\Http\Request;

class GroupeController extends Controller

{
     /**
     * Paginate the authenticated user's tasks.
     *
     * @return \Illuminate\View\View
     */
    public function groups()
    {
        $groupes = Groupe::all();
        $assocs = Assoc_Groupe::all();
        $users = User::all();
        return view('/groupes', [
            'groupes' => $groupes,
            'assocs' => $assocs,
            'users' => $users
            ]);
    }
    public function store(Request $request)
    {
        $request->validate([
            
            
        ]); 
            $groupe = new Groupe();
            $groupe->nom = $request->nom;
            $groupe->save();

            $assoc = new Assoc_Groupe();
            $assoc->user_id  = auth()->id();
            $assoc->group_id = $groupe->id;
            $assoc->score = 0;
            $assoc->save();
            return redirect('/dashboard')->with('success', 'groupe créée!');
         
    }

 

}


