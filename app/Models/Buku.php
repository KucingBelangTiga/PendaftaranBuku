<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\Sluggable;

class Buku extends Model
{
    use hasFactory;
    // use Sluggable;

    protected $table = 'buku';
    protected $primaryKey = 'id';
    protected $fillable = [
        'id','NoBook','nama','no_hp','email','tanggal_buku'
    ];

    public function getRouteKeyName()
    {
        return 'slug';
    }

    public function sluggable(): array
    {
        return [
            'slug' => [
                'source' => 'title'
            ]
        ];
    }
}
