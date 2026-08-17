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
            $animal->slug = static::uniqueSlug($animal->naam);
        });

        static::updating(function ($animal) {
            if ($animal->isDirty('naam')) {
                $animal->slug = static::uniqueSlug(
                    $animal->naam,
                    $animal->id
                );
            }
        });
    }

    protected static function uniqueSlug($naam, $ignoreId = null)
    {
        $baseSlug = Str::slug($naam);
        $slug = $baseSlug;
        $counter = 1;

        while (
        static::where('slug', $slug)
            ->when($ignoreId, function ($query) use ($ignoreId) {
                $query->where('id', '!=', $ignoreId);
            })
            ->exists()
        ) {
            $slug = $baseSlug . '-' . $counter;
            $counter++;
        }

        return $slug;
    }
}
