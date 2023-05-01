<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    protected $table = 'projects';
    use HasFactory;
    protected $fillable = [
        'id',
        'titre',
        'description',
        'date_debut',
        'date_fin'

    ];
    public function axe_prj()
{
    return $this->belongsToMany(Axes::class, 'affect_axe_prj', 'FK_prj', 'FK_axe');
}
public function member_prj()
{
    return $this->belongsToMany(Membre::class, 'affect_prj_member', 'FK_prj', 'FK_member');
}

}
