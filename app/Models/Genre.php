<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Genre extends Model
{
    protected $guarded = ['id'];

    /**
     * Get the route key for the model.
     */
    public function getRouteKeyName(): string
    {
        return 'slug';
    }

    /**
     * Get all of the books for the Genre
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function books(): HasMany
    {
        return $this->hasMany(Book::class);
    }
}
