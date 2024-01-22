<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Annonce;
use App\Models\Module;
use App\Models\ModuleUser;
use App\Models\Departement;
use App\Models\DepartementUser;
use App\Models\Filiere;
use App\Models\FiliereUser;

class ChefDepartementController extends Controller
{
    protected function getChefDepId($userId)
    {
        $user = User::with('departementUsers')->find($userId);
        $departement = $user->departementUsers->first();

        if ($departement) {
            return $departement->id_departement;
        }

        return null;
    }
    
    public function addAnnouncement(Request $request)
    {
        $request->validate([
            'message' => 'required',
            'type' => 'required', // Validate type to be one of the allowed values
        ]);
        $departementId = $this->getChefDepId(auth()->user()->id_utilisateur);
        
        Annonce::create([
            'ID_departement' => $departementId ,
            'ID_utilisateur' => auth()->user()->id_utilisateur,
            'Type_annonce' => $request->input('type'),
            'Contenu' => $request->input('message'),
            'titre' => $request->input('titre'),
        ]);

        return redirect('/dashboard')->with('success', 'Announcement added successfully');
    }

}