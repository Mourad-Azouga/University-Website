<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Models\Annonce;
use App\Models\Module;
use App\Models\ModuleUser;
use App\Models\Departement;
use App\Models\DepartementUser;
use App\Models\Filiere;
use App\Models\FiliereUser;
use App\Models\Demande;


use Illuminate\Http\Request;

class DashboardController extends Controller
{

    public function updateDemandeStatus(Request $request, Demande $demande)
    {
        $request->validate([
            'status' => 'required|in:non_vue,en_cours,traite',
        ]);

        $demande->update([
            'status' => $request->input('status'),
        ]);

        return redirect()->back()->with('success', 'Status updated successfully');
    }
    public function dashboard()
    {
        $user = Auth::user();
    
        switch ($user->role) {
            case 'etudiant':
                $user = auth()->user();
                $modules = $user->modules;
                $filieres = $user->filieres;
                $announcements = Annonce::whereIn('ID_module', $user->modules->pluck('id_module'))
                ->orWhereIn('ID_filiere', $user->filieres->pluck('id_filiere'))
                ->limit(5)
                ->get();               
                return view('dashboards.etudiant', ['modules' => $modules, 'filieres' => $filieres, 'announcements' => $announcements]);

            case 'delegue':
                $user = auth()->user();
                $modules = $user->modules;
                $filieres = $user->filieres;
                $announcements = Annonce::whereIn('ID_module', $user->modules->pluck('id_module'))
                ->orWhereIn('ID_filiere', $user->filieres->pluck('id_filiere'))
                ->limit(5)
                ->get();            
                return view('dashboards.delegue', ['modules' => $modules, 'filieres' => $filieres, 'announcements' => $announcements]);

            case 'professeur':
                $user = auth()->user();
                $modules = $user->modules;
                $filieres = $user->filieres;
                $professorDemandes = Demande::whereIn('id_module', $modules->pluck('id_module'))
                ->where('type', 'professeur')
                ->whereIn('status', ['non_vue', 'en_cours'])
                ->limit(5)
                ->get();
                return view('dashboards.professeur', ['modules' => $modules, 'filieres' => $filieres, 'demandes' => $professorDemandes]);

            case 'responsable_filiere':
                $user = auth()->user();
                $filieres = $user->filieres;
                $respo_filiereDemandes = Demande::whereIn('id_filiere', $filieres->pluck('id_filiere'))
                ->whereIn('status', ['non_vue', 'en_cours'])               

                ->where('type', 'responsable_filiere')
                ->orWhere(function ($query) use ($filieres) {
                    $query->where('type', 'delegue')
                          ->whereIn('id_filiere', $filieres->pluck('id_filiere'));
                }) 
                ->limit(5)
                ->get();
                return view('dashboards.responsable_filiere', ['filieres' => $filieres, 'demandes' => $respo_filiereDemandes]);

            case 'chef_departement':
                return view('dashboards.chef_departement');

            case 'responsable_pedagogique':
                return view('dashboards.responsable_pedagogique');

            default:
                return redirect('/');
        }
    }
}
