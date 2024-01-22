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


use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function dashboard()
    {
        $user = Auth::user();
    
        switch ($user->role) {
            case 'etudiant':
                dd($user->departements->pluck('id_departement'));

                $announcements = Annonce::whereIn('ID_module', $user->modules->pluck('id_module'))
                ->orWhereIn('ID_filiere', $user->filieres->pluck('id_filiere'))
                ->orWhereIn('ID_departement', $user->departements->pluck('id_departement'))
                ->limit(5)
                ->get();               
                return view('dashboards.etudiant', ['announcements' => $announcements]);

            case 'delegue':
                $announcements = Annonce::whereIn('ID_module', $user->modules->pluck('id_module'))
                ->orWhereIn('ID_filiere', $user->filieres->pluck('id_filiere'))
                ->orWhereIn('ID_departement', $user->departements->pluck('id_departement'))
                ->limit(5)
                ->get();            
                return view('dashboards.delegue', ['announcements' => $announcements]);

                case 'professeur':
                return view('dashboards.professeur');

            case 'responsable_filiere':
                return view('dashboards.responsable_filiere');

            case 'chef_departement':
                return view('dashboards.chef_departement');

            case 'responsable_pedagogique':
                return view('dashboards.responsable_pedagogique');

            default:
                return redirect('/');
        }
    }
}
