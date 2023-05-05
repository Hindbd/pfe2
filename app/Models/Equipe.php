<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Equipe extends Model
{
    use HasFactory;
    protected $table = 'equipes';
    
    
    protected $fillable = [
        'id',
        'nom',
        'chef_equipe',

    ];
    public function equipe_member()
    {
        return $this->belongsToMany(Membre::class, 'affect_equipe_member', 'FK_equipe', 'FK_member');
    }

}
