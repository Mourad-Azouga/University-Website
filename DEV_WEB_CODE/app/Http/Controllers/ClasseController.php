<?php

namespace App\Http\Controllers;

use App\Models\ClassUser;
use Illuminate\Support\Facades\Log;
use Illuminate\Http\Request;
use App\Models\Classe;
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
            'id_classe' => 'required|exists:classe,id_classe',
            'id_module' => 'required|exists:module,id_module',
            'id_professeur' => 'required|exists:utilisateurs,id_utilisateur', // assuming the primary key of users table is 'id'
        ]);

        // Check if the entry already exists
        if (ClassUser::where([
            'id_module' => $request->input('id_module'),
            'id_utilisateur' => $request->input('id_professeur'),
            'id_classe' => $request->input('id_classe'),
        ])->exists()) {
            // Entry already exists, handle accordingly (e.g., show an error message)
            return redirect()->route('login')->with('error', 'La combinaison existe déjà dans la table.');
        }

        // Create a new ClassUser instance
        $classuser = new ClassUser();
        
        // Set the values from the form
        $classuser->id_module = $request->input('id_module');
        $classuser->id_utilisateur = $request->input('id_professeur');
        $classuser->id_classe = $request->input('id_classe');

        // Save the new ClassUser record
        $classuser->save();

        // Log a message
        Log::info('New record added to classusers table.');

        // Return a response or redirect
        return redirect('/dashboard')->with('success', 'Classe ajoutée avec succès.');
    }





}