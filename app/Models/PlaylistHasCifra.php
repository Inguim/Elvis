<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PlaylistHasCifra extends Model
{
    use HasFactory;

    protected $fillable = [
        'cifra_id',
        'playlist_id',
        'user_id',
    ];

    public function cifra()
    {
        return $this->belongsTo('App\Models\Cifra');
    }

    public function playlist()
    {
        return $this->belongsTo('App\Models\Playlist');
    }

    public function user()
    {
        return $this->belongsTo('App\Models\User');
    }
}
