<?php

namespace App\Models;

use Illuminate\Console\Scheduling\Event;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class pubs extends Model
{
    protected $table = 'pubs';
    use HasFactory;
    protected $fillable = [
        'id',
        'titre',
        'contenu',
        'img',
        'editeur'
    ];
    public function pub_axe()
    {
        return $this->belongsToMany(Axes::class, 'affect_axe_pub',  'FK_pub','FK_axe');
    }
    public function pub_member()
    {
        return $this->belongsToMany(Membre::class, 'affect_pub_member', 'FK_pub', 'FK_member');
    }
    public function pub_event()
    {
        return $this->belongsToMany(Event::class, 'affect_event_pub', 'FK_pub', 'FK_event');
    }
    public function events()
    {
        return $this->belongsToMany(Event::class, 'affect_event_pub');
    }
}
