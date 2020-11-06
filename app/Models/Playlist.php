<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Playlist extends Model
{
    use HasFactory;

    protected $fillable = [
        'nome',
        'user_id',
        'img_id',
        'descanso_id',
    ];

    public function playlist_cifras()
    {
        return $this->hasMany('App\Models\PlaylistHasCifra');
    }

    public function imagem()
    {
        return $this->hasOne('App\Models\Imagem');
    }

    public function user()
    {
        return $this->belongsTo('App\Models\User');
    }

    public function descanso()
    {
        return $this->hasOne('App\Models\Descanso');
    }
}
