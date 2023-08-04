<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class client extends Model
{
    use HasFactory;
    protected $fillable = [
        'id_client',
        'prenom_client',
        'contact_client',
        'code',
    ];
}
