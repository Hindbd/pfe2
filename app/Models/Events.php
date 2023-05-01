<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Events extends Model
{
    protected $table = 'events';
    use HasFactory;
    protected $fillable=[
        'titre',
        'description',
        'Lieu',
        'date_debut',
        'date_fin'
    ];
    public function event_prj()
    {
        return $this->belongsToMany(Projets::class, 'affect_event_prj', 'FK_prj', 'FK_event');
    }
    public function event_axe()
    {
        return $this->belongsToMany(Axes::class, 'affect_event_axe', 'FK_axe', 'FK_event');
    }
}
