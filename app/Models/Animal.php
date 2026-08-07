<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Animal extends Model
{
    use HasFactory;

    protected $fillable = [
        'naam',
        'geboortedatum',
        'soort',
        'geslacht',
        'kleur',
        'locatie',
        'eten',
        'weetje',
        'foto',
        'qr_code',
        'slug',
    ];

    protected static function boot()
    {
        parent::boot();

        static::creating(function ($animal) {
            $animal->slug = Str::slug($animal->naam);
        });
    }
}
