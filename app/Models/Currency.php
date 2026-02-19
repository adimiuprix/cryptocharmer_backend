<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Currency extends Model
{
    protected $fillable = [
        'code',
        'name',
        'icon',
        'network',
    ];

    public function contents()
    {
        return $this->belongsToMany(Content::class, 'content_currency');
    }
}
