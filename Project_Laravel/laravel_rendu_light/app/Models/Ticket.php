<?php
 
namespace App\Models;
 
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\belongsTo;
use Illuminate\Database\Eloquent\Relations\belongsToMany;
use Illuminate\Database\Eloquent\Relations\hasMany;


class Ticket extends Model {
    protected $table    = 'tickets';
    protected $fillable = [
        'projet_id','created_by','assigned_to','titre','description',
        'statut','priorite','type',
    ];

    public function projet()       { return $this->belongsTo(Projet::class); }
    public function assignee()     { return $this->belongsToMany(User::class); }
}
