<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use \Illuminate\Database\Eloquent\Relations\HasMany;

class Country extends Model
{
    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'id',
    ];

    /**
     * @return HasMany
     */
    public function phoneNumbers()
    {
        return $this->hasMany(PhoneNumber::class, 'country_id');
    }
}
