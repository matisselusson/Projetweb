<?php
 
namespace App\Models;
 
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\belongsTo;

class TimeEntry extends Model {
    protected $fillable = ['ticket_id','user_id','entry_date','duration_minutes','comment'];

    public function ticket() { return $this->belongsTo(Ticket::class); }
    public function user()   { return $this->belongsTo(User::class); }
}

