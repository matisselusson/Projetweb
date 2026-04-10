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
        'statut','priorite','type','estimated_minutes',
        'validated_at','validated_by',
    ];

    public function projet()       { return $this->belongsTo(Projet::class); }
    public function creator()      { return $this->belongsTo(User::class); }
    public function assignee()     { return $this->belongsToMany(User::class); }
    public function validator()    { return $this->belongsTo(User::class); }
}
