<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Relations\Pivot;

class ClientMyuser extends Pivot  
{
    protected $table = 'client_myuser';

    protected $fillable = [
        'myuser_id',
        'client_id',
    ];
}