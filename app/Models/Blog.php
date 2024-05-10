<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Blog extends Model
{
    use HasFactory;
    
    protected $guarded = [];

    
    protected $casts = [
        'approve' => 'boolean',
    ];

    public function comments(): HasMany
    {
        return $this->hasMany(Comment::class);
    }
    public function meta() : HasOne
    {
        return $this->hasOne(Meta::class);
    }

    public function user() : BelongsTo
    {
        return $this->belongsTo(User::class);
    }
}
