<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Content extends Model
{
    protected $fillable = [
        'name',
        'logo',
        'headline',
        'category_id',
        'badges',
        'highlight',
        'features',
        'wallet_id',
        'link',
    ];

    protected $casts = [
        'badges' => 'array',
        'features' => 'array',
    ];

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function wallet()
    {
        return $this->belongsTo(Wallet::class);
    }

    public function currencies()
    {
        return $this->belongsToMany(Currency::class, 'content_currency');
    }
}
