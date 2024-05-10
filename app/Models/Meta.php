<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Meta extends Model
{
    use HasFactory;

    protected $guarded = [];

    protected $casts = [
        'meta_keywords' => 'array'
    ];
    public function blog(): BelongsTo
    {
        return $this->belongsTo(Blog::class);
    }
}
