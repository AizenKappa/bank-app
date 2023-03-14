<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Client extends Model
{
    use HasFactory;


    public function comptes(): HasMany
    {
        // One To Many
        return $this->hasMany(Compte::class, 'client_id', 'id'); 
        //-----------------> ('child class', 'foreign key', 'local key')                   
    }
}
