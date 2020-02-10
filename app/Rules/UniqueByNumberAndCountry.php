<?php

namespace App\Rules;

use App\PhoneNumber;
use Illuminate\Contracts\Validation\Rule;

class UniqueByNumberAndCountry implements Rule
{
    private $countryId;
    private $phoneNumberId;

    /**
     * Create a new rule instance.
     *
     * @param int $countryId
     * @param int|null $phoneNumberId
     *
     * @return void
     */
    public function __construct(int $countryId, int $phoneNumberId = null)
    {
        $this->countryId = $countryId;
        $this->phoneNumberId = $phoneNumberId;
    }

    /**
     * Determine if the validation rule passes.
     *
     * @param  string $attribute
     * @param  mixed $value
     *
     * @return bool
     */
    public function passes($attribute, $value)
    {
        // Estamos editando el numero
        if ($this->phoneNumberId) {
            if (PhoneNumber::where('country_id', '=', $this->countryId)->where('number', '=', $value)->where('id', '!=', $this->phoneNumberId)->first()) {
                return false;
            }
        } // Estamos creando un numero nuevo
        else {
            if (PhoneNumber::where('country_id', '=', $this->countryId)->where('number', '=', $value)->first()) {
                return false;
            }
        }


        return true;
    }

    /**
     * Get the validation error message.
     *
     * @return string
     */
    public function message()
    {
        return 'That number, for that country, is already in use.';
    }
}
