<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Descanso extends Model
{
    use HasFactory;

    protected $fillable = [
        'configuracao',
    ];

    public function playlist()
    {
        return $this->belongsTo('App\Models\Playlist');
    }
}

