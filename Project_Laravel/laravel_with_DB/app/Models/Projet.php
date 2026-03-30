<?php
 
namespace App\Models;
 
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\hasMany;
 
class Projet extends Model
{

    protected $table = 'projets';
 

    protected $fillable = [
        'titre',
        'description',
        'priorite',
        'statut',
        'assigne',
        #'temps_estime',
        #'cree_le',
    ];
    public function tickets()
    {
        return $this->hasMany(Ticket::class);
    }
    
}