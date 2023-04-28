<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class partenaire extends Model
{
    use HasFactory;
    protected $fillable =[
        'id',
        'description',
        'domain_activite',
        'adresse'
    ];
}
