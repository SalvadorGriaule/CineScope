<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Platforme extends Model
{
    protected $fillable = ["name", "url", "logo"];

    protected $table = 'platformes';

    public function films(): BelongsToMany
    {
        return $this->belongsToMany(Film::class);
    }
}
