<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\SoftDeletes;

class District extends Model
{
    use HasFactory, HasUuids, SoftDeletes;
    protected $guarded = ['id'];

    public function region(): BelongsTo
    {
        return $this->belongsTo(Region::class);
    }
}
