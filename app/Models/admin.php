<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class admin extends Model
{
    use HasFactory;
    protected $fillable =[
        'id',
        'nom',
        'prenom',
        'img',
        'email',
        'password',
        'date_debut',
        'date_fin'
    ];
}
