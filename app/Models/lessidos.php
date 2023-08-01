<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class lessidos extends Model
{
    use HasFactory;
    protected $fillable = [
        'nom_lessidos',
        'prenom_lessidos',
        'contact_lessidos',
        'datenaissance',
        'pieceIDrecto',
        'pieceIDverso',
        'lieu_habitation',
        'code',
    ];
}
