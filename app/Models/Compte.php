<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Compte extends Model
{
    use HasFactory;

    // Updated_at timestamps updated when the child model is updated
    protected $touches = ['client'];


    public function client(): BelongsTo
    {
        return $this->belongsTo(Client::class, 'client_id', 'id');
        //-----------------> ('Parent class', 'foreign key', 'owner key')
    }
}
