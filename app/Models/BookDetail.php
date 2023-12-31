<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class BookDetail extends Model
{
    protected $guarded = ['id'];

    protected $primaryKey = 'uuid';

    public function getKeyType()
    {
        return 'string';
    }

    public function book(): BelongsTo
    {
        return $this->belongsTo(Book::class, 'book_id', 'uuid');
    }
}
