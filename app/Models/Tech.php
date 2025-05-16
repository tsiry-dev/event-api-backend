<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Tech extends Model
{
    /** @use HasFactory<\Database\Factories\TechFactory> */
    use HasFactory;


    protected $fillable = [
        'name',
        'description',
        'price',
        'stock',
        'slug'
    ];

    public static function generateSlug(string $str)
    {
        return Str::slug($str);
    }
}
