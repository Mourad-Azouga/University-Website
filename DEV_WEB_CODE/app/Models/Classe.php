<?php
// app\Models\Classe.php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Classe extends Model
{
    protected $table = 'classe';
    protected $primaryKey = 'ID_classe';
    public $timestamps = false; // Assuming there are no created_at and updated_at columns

    protected $fillable = [
        'Nom_classe',
        'ID_departement',
        'id_etudiante1',
        'id_etudiante2',
    ];

    public function departement()
    {
        return $this->belongsTo(Departement::class, 'ID_departement');
    }

    public function etudiante1()
    {
        return $this->belongsTo(Utilisateur::class, 'id_etudiante1');
    }

    public function etudiante2()
    {
        return $this->belongsTo(Utilisateur::class, 'id_etudiante2');
    }
}