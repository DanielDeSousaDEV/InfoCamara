<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Deputy extends Model
{
    protected $fillable = [
        'deputy_identifier',
        'name',
        'email',
        'party_acronym',
        'photo',
        'state_of_birth',
    ];

    public function expenses(): HasMany
    {
        return $this->hasMany(Expense::class);
    }
}
