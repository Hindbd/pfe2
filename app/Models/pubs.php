<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class pubs extends Model
{
    protected $table = 'pubs';
    use HasFactory;
    protected $fillable = [
        'id',
        'nom',
        'titre',
        'contenu',

    ];
}
