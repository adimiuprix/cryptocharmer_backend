<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Wallet extends Model
{
    protected $fillable = ['provider', 'is_supported'];

    public function contents()
    {
        return $this->hasMany(Content::class);
    }
}
