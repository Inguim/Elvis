<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cifra extends Model
{
    use HasFactory;

    protected $fillable = [
        'nome',
        'caminho',
        'user_id',
        'autoscroll_id',
    ];
    public function user()
    {
        return $this->belongsTo('App\Models\User');
    }

    public function playlist_cifras()
    {
        return $this->hasMany('App\Models\PlaylistHasCifra');
    }

    public function auto_scroll()
    {
        return $this->hasOne('App\Models\AutoScroll');
    }
}
