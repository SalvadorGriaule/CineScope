<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Film extends Model
{
    protected $fillable = ["title","synopsis","releaseYear"];

    public function platforms(): BelongsToMany
    {
        return $this->belongsToMany(Platforme::class);
    }
}
