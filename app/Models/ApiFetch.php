<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Attributes\Scope;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;

class ApiFetch extends Model
{
    protected $fillable = [
        'fetched_at',
        'current',
        'is_valid',
        'total'
    ];

    protected $casts = [
        'fetched_at' => 'datetime'
    ];

    #[Scope]
    protected function valid(Builder $query)
    {
        $query->where('is_valid', true);
    }
}
