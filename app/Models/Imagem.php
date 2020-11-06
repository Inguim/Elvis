<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Imagem extends Model
{
    use HasFactory;

    protected $fillable = [
        'caminho',
    ];

    public function playlist()
    {
        return $this->belongsTo('App\Models\Playlist');
    }
}
