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
        return $this->belongsToMany(Project::class, 'affect_event_prj',  'FK_event','FK_prj');
    }
    public function event_axe()
    {
        return $this->belongsToMany(Axes::class, 'affect_event_axe',  'FK_event','FK_axe');
    }
    public function event_member()
    {
        return $this->belongsToMany(Membre::class, 'affect_event_member', 'FK_event', 'FK_member');
    }
    public function pubs()
    {
        return $this->belongsToMany(pubs::class, 'affect_event_pub');
    }
}
