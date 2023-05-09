<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tables extends Model
{
    use HasFactory;
    protected $fillable = ['Nom', 'Prénom', 'Email', 'Date_de_naissance', 'Filière', 'Téléphone'];

}
