<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    protected $fillable = [
        'name',
        'email',
        'phone',
        'client_id'
    ];

    public function client()
    {
        return $this->belongsTo(Client::class);
    }
}
