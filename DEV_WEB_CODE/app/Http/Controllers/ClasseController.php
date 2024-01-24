<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Classe;
use App\Models\ModuleUser;
use App\Models\Module;
use App\Models\User;

class ClasseController extends Controller
{
    public function afficheFormulaireclasse()
    {
        $classes = Classe::all();
        $modules = Module::all();
        $professeurs = User::all();

        return view('formulaire.ajouteclasse', compact('classes', 'modules', 'professeurs'));
    }

    public function ajouteClasse(Request $request)
    {
        // Validate the form data
        $request->validate([
            'id_classe' => 'required|exists:classe,ID_classe',
            'id_module' => 'required|exists:modules,id_module',
            'id_professeur' => 'required|exists:users,id', // assuming the primary key of users table is 'id'
        ]);

        // Check if the combination of id_module and id_professeur already exists in moduleusers
        $existingModuleUser = ModuleUser::where('id_module', $request->id_module)
            ->where('id_utilisateur', $request->id_professeur)
            ->first();

        // If the combination doesn't exist, you may handle it accordingly (e.g., show an error message)
        if (!$existingModuleUser) {
            return redirect()->back()->with('error', 'Combinaison module et professeur non trouvée.');
        }

        // Update the id_classe in the moduleusers table
        $existingModuleUser->id_classe = $request->id_classe;
        $existingModuleUser->save();

        // Redirect back or to another route with a success message
        return redirect()->route('login')->with('success', 'Id_classe ajouté avec succès.');
    }
}
