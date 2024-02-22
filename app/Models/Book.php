<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'author',
        'description',
        'publisher',
        'publish_year',
        'ibsn',
        'genre',
        'language',
        'page_count',
        'price',
        'year',
    ];
}