<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DelegueController extends Controller
{
    public function index()
    {
        // Add any logic specific to the etudiant dashboard here
        return view('dashboards.delegue');
    }
}
