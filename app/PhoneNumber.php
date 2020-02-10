<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PhoneNumber extends Model
{
    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'id', 'user_id', 'country_id',
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function country()
    {
        return $this->belongsTo(Country::class, 'country_id');
    }

    /**
     * Return query with eager loaded
     *
     * @param int $userId
     *
     * @return mixed
     */
    static function getPhoneNumbersByUser(int $userId)
    {
        return self::whereHas('user', function ($q) use ($userId) {
            $q->where('user_id', '=', $userId);
        })->with('country')->get();
    }

    /**
     * Return query with eager loaded
     *
     * @param int $userId
     * @param string $countryCode
     *
     * @return mixed
     */
    static function getPhoneNumbersByUserAndCountry(int $userId, string $countryCode)
    {
        return self::whereHas('user', function ($q) use ($userId) {
            $q->where('user_id', '=', $userId);
        })->whereHas('country', function ($q) use ($countryCode) {
            $q->where('code', '=', $countryCode);
        })->with('country')->get();
    }

    /**
     * Return query with eager loaded
     *
     * @param int $userId
     * @param int $phoneNumber
     *
     * @return mixed
     */
    static function getPhoneNumbersByUserAndPhoneNumber(int $userId, int $phoneNumber)
    {
        return self::whereHas('user', function ($q) use ($userId, $phoneNumber) {
            $q->where('user_id', '=', $userId)->where('number', '=', $phoneNumber);
        })->with('country')->get();
    }

    /**
     * Return query with eager loaded
     *
     * @param int $userId
     * @param string $countryCode
     * @param int $phoneNumber
     *
     * @return mixed
     */
    static function getPhoneNumbersByUserAndCountryAndPhoneNumber(int $userId, string $countryCode, int $phoneNumber)
    {
        return self::whereHas('user', function ($q) use ($userId, $phoneNumber) {
            $q->where('user_id', '=', $userId)->where('number', '=', $phoneNumber);
        })->whereHas('country', function ($q) use ($countryCode) {
            $q->where('code', '=', $countryCode);
        })->with('country')->get();
    }
}
