<?php
 
namespace App\Models;
 
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\belongsTo;
use Illuminate\Database\Eloquent\Relations\belongsToMany;


class Myuser extends Model {
    protected $table    = 'myuser';
        protected $fillable = ['user_id', 'role'];

    public function user() 
    { 
        return $this->belongsTo(User::class); 
    }


    public function clients() 
    { 

        return $this->belongsToMany(Client::class); 
    }

}
