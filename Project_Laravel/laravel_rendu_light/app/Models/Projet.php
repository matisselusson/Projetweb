<?php
 
namespace App\Models;
 
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\belongsTo;
use Illuminate\Database\Eloquent\Relations\hasMany;
use Illuminate\Database\Eloquent\Relations\belongsToMany;
use Illuminate\Database\Eloquent\Relations\hasOne;

class Projet extends Model {
    protected $table    = 'projets';
    protected $fillable = ['client_id','titre','description','statut'];

    public function client()   { return $this->belongsTo(Client::class); }
    public function tickets()  { return $this->hasMany(Ticket::class); }
    public function contract() { return $this->hasOne(Contract::class); }
}
