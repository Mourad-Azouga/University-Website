<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use App\Models\Annonce;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function dashboard()
    {
        $user = Auth::user();
    
        switch ($user->role) {
            case 'etudiant':
                $announcements = Annonce::limit(5)->get();
            return view('dashboards.etudiant', ['announcements' => $announcements]);

            case 'delegue':
                $announcements = Annonce::limit(5)->get();
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
