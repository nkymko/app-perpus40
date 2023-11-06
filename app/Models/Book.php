<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    protected $guarded = ['id'];
    
    protected $primaryKey = 'uuid';

    public function getKeyType()
    {
        return 'string';
    }
    
    /**
     * Get the genre of Book
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function genre(): BelongsTo
    {
        return $this->belongsTo(Genre::class);
    }

    /**
     * Get all of the detail for the Book
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function detail(): HasMany
    {
        return $this->hasMany(BookDetail::class);
    }
}