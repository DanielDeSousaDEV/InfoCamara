<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Expense extends Model
{
    protected $fillable = [
        'expense_type',
        'document_type',
        'issue_date',
        'document_url',
        'supplier_name',
        'deputy_id',
    ];

    protected $casts = [
        'issue_date' => 'datetime'
    ];

    public function deputy(): BelongsTo
    {
        return $this->belongsTo(Deputy::class);
    }
}
