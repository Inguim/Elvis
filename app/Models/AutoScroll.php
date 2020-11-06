<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AutoScroll extends Model
{
    use HasFactory;

    protected $fillable = [
        'configuracao',
    ];

    public function cifra()
    {
        return $this->belongsTo('App\Models\Cifra');
    }
}
