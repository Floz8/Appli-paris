<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Models\Evenement;
use Illuminate\Support\Facades\Auth;

class EvenementController extends Controller
{
     /**
     * Paginate the authenticated user's tasks.
     *
     * @return \Illuminate\View\View
     */
    public function list()
    {
        $evenements = Evenement::all();
        return view('welcome', [
            'evenements' => $evenements,
            ]);
    }

    /**
     * Store a new incomplete task for the authenticated user.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(Request $request)
    {
        $request->validate([
            'challenger1'=>'required',
            'challenger2'=>'required'
            
        ]); 
            $Evenement = new Evenement();
            $Evenement->description = $request->description;
            $Evenement->statut ="Prochainement";
            $Evenement->importance=$request->importance;
            $Evenement->user_id = auth()->id();
            $Evenement->save();
            return redirect('/dashboard')->with('success', 'Evenement créée!');
         
    }

    /**
     * Mark the given task as complete and redirect to tasks index.
     *
     * @param \App\Models\Evenement $Evenement
     * @return \Illuminate\Routing\Redirector
     * @throws \Illuminate\Auth\Access\AuthorizationException
     */
    public function finir(Request $request, $id)
    {
        // Validation for required fields (and using some regex to validate our numeric value)
     
        $Evenement = Evenement::find($id);
        // Getting values from the blade template form
        $Evenement->Etat="terminé";
        $Evenement->save();
 
        return redirect('dashboard')->with('success', 'match terminé'); // -> resources/views/restaurants/index.blade.php
        
    }


    public function update(Request $request, $id)
         {
             // Validation for required fields (and using some regex to validate our numeric value)
             $request->validate([
                 'description'=>'required',
                 
             ]); 
             $Evenement = Evenement::find($id);
             // Getting values from the blade template form
             $Evenement->challenger1 =  $request->get('challenger1');
             $Evenement->challenger2 =  $request->get('challenger2');
             $Evenement->save();
      
             return redirect('dashboard')->with('success', 'Evenement updated.'); // -> resources/views/restaurants/index.blade.php
             
         }

         public function goToEdit($Evenement){
            $Evenement = Evenement::find($Evenement);
           
           return view('EditerEvenement',[
            'Evenement'=>$Evenement
        ]);
        }

        public function delete($Evenement){
            $Evenement = Evenement::find($Evenement);
            $Evenement->delete();
            return redirect('/dashboard')->with('success', 'Tâche supprimé.');
            
        }
}
