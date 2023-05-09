<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class delet extends Model
{
    use HasFactory;
    protected $table = 'delet'; // Remplacez 'deleted_tables' par le nom réel de votre table

    protected $fillable = [
        'Nom',
        'Prénom',
        'Email',
        'Date_de_naissance',
        'Filière',
        'Téléphone',
        // Ajoutez d'autres attributs en fonction de votre structure de table
    ];
}
