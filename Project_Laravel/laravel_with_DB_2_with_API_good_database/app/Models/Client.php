<?php
 
namespace App\Models;
 
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\hasMany;


class Client extends Model {
    protected $fillable = ['name','email','phone','address'];

    public function projets() { return $this->hasMany(Projet::class); }
    public function users()   { return $this->hasMany(User::class); }
    public function myusers() {return $this->belongsToMany(Myuser::class);}

}

