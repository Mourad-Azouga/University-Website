<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Filiere;
use App\Models\Module;

class AjouteFiliereController extends Controller
{
    public function afficheFormulaireajoute()
    {
        return view('formulaire.ajoutefilier'); // Assuming you have a blade file named 'form.blade.php' in the 'resources/views/filiere/' directory
    }

    // Method to handle form submission
    public function ajouteFiliere(Request $request)
    {
        // Validate the form data
        $validatedData = $request->validate([
            'nouveau_nom' => 'required|string|max:255',
            'nouvelle_description' => 'required|string',

                // Validation rules for module 1
            'nouveau_nom1' => 'required|string|max:255',
            'nouvelle_description1' => 'required|string',

            // Validation rules for module 2
            'nouveau_nom2' => 'required|string|max:255',
            'nouvelle_description2' => 'required|string',
        ]);

        // Create a new filière
        $filiere = new Filiere;
        $filiere->nom = $validatedData['nouveau_nom'];
        $filiere->description = $validatedData['nouvelle_description'];
        $filiere->save();

        $module1 = new Module;
        $module1->nom = $request->input('nouveau_nom1');
        $module1->description = $request->input('nouvelle_description1');
        $module1->id_filiere = $filiere->id; // Associate module with the new filière
        $module1->save();
    
        $module2 = new Module;
        $module2->nom = $request->input('nouveau_nom2');
        $module2->description = $request->input('nouvelle_description2');
        $module2->id_filiere = $filiere->id; // Associate module with the new filière
        $module2->save();

        // Optionally, you can redirect the user to a specific page after successful submission
        return redirect('/dashboard');
    }
}


