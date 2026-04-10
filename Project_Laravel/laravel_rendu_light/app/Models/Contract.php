<?php
 
namespace App\Models;
 
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\belongsTo;


class Contract extends Model {
    protected $fillable = ['projet_id','hours_included','hourly_rate','start_date','end_date'];

    public function projet() { return $this->belongsTo(Projet::class); }
}
