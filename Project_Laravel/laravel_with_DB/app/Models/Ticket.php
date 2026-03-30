<?php
 
namespace App\Models;
 
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
 
class Ticket extends Model
{

    protected $table = 'tickets';
 

    protected $fillable = [
        'titre',
        'description',
        'priorite',
        'statut',
        'type',
        'projet_id',
        'assigne',
        #'temps_estime',
        #'cree_le',
    ];

    public function projet()
    {
        return $this->belongsTo(Projet::class, 'projet_id');
    }
}