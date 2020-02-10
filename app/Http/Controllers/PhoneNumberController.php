<?php

namespace App\Http\Controllers;

use App\PhoneNumber;
use App\Providers\ResponseServiceProvider;
use App\Rules\UniqueByNumberAndCountry;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class PhoneNumberController extends Controller
{
    /**
     * @return ResponseServiceProvider
     */
    public function getPhoneNumbers()
    {
        $phoneNumbers = PhoneNumber::getPhoneNumbersByUser(Auth::user()->getAuthIdentifier());

        if ($phoneNumbers) {
            return response()->success('', $phoneNumbers);
        }

        return response()->error('There are no phone numbers associated with your user');
    }

    /**
     * @param string $countryCode
     *
     * @return ResponseServiceProvider
     */
    public function getPhoneNumbersByCountry(string $countryCode)
    {
        $phoneNumbers = PhoneNumber::getPhoneNumbersByUserAndCountry(Auth::user()->getAuthIdentifier(), $countryCode);

        if ($phoneNumbers) {
            return response()->success('', $phoneNumbers);
        }

        return response()->error('There are no phone numbers associated with your user');
    }

    /**
     * @param int $phoneNumber
     *
     * @return ResponseServiceProvider
     */
    public function getPhoneNumbersByPhoneNumber(int $phoneNumber)
    {
        $phoneNumbers = PhoneNumber::getPhoneNumbersByUserAndPhoneNumber(Auth::user()->getAuthIdentifier(), $phoneNumber);

        if ($phoneNumbers) {
            return response()->success('', $phoneNumbers);
        }

        return response()->error('There are no phone numbers associated with your user');
    }

    /**
     * @param string $countryCode
     * @param int $phoneNumber
     *
     * @return ResponseServiceProvider
     */
    public function getPhoneNumbersByCountryAndPhoneNumber(string $countryCode, int $phoneNumber)
    {
        $phoneNumbers = PhoneNumber::getPhoneNumbersByUserAndCountryAndPhoneNumber(Auth::user()->getAuthIdentifier(), $countryCode, $phoneNumber);

        if ($phoneNumbers) {
            return response()->success('', $phoneNumbers);
        }

        return response()->error('There are no phone numbers associated with your user');
    }

    /**
     * @param Request $request
     *
     * @return ResponseServiceProvider
     */
    public function addPhoneNumber(Request $request)
    {
        $countryId = $request->get('country_id', '');

        $validator = Validator::make($request->all(), [
            'number' => ['required', new UniqueByNumberAndCountry($countryId)],
            'country_id' => 'required',
        ]);

        if ($validator->fails()) {
            return response()->error($validator->errors()->first());
        }

        $phoneNumber = new PhoneNumber();
        $phoneNumber->number = $request->number;
        $phoneNumber->country_id = $request->country_id;
        $phoneNumber->user_id = Auth::user()->getAuthIdentifier();
        $phoneNumber->save();

        return response()->success('PhoneNumber created', $phoneNumber);
    }

    /**
     * @param Request $request
     * @param int $phoneNumberId
     *
     * @return ResponseServiceProvider
     */
    public function editPhoneNumber(Request $request, int $phoneNumberId)
    {
        $countryId = $request->get('country_id', '');

        $validator = Validator::make($request->all(), [
            'number' => ['required', new UniqueByNumberAndCountry($countryId, $phoneNumberId)],
            'country_id' => 'required',
        ]);

        if ($validator->fails()) {
            return response()->error($validator->errors()->first());
        }

        $phoneNumber = PhoneNumber::find($phoneNumberId);

        if ($phoneNumber && $phoneNumber->user_id === Auth::user()->getAuthIdentifier()) {

            $phoneNumber->number = $request->number;
            $phoneNumber->country_id = $request->country_id;
            $phoneNumber->save();

            return response()->success('edited PhoneNumber', ['country' => $phoneNumber->country->name, 'number' => '+' . $phoneNumber->country->phonecode . $phoneNumber->number]);
        }

        return response()->error('The number does not correspond to your user');
    }

    /**
     * @param int $phoneNumberId
     *
     * @return ResponseServiceProvider
     */
    public function deletePhoneNumber(int $phoneNumberId)
    {
        $phoneNumber = PhoneNumber::find($phoneNumberId);

        if ($phoneNumber && $phoneNumber->user_id === Auth::user()->getAuthIdentifier()) {
            $completeNumber = '+' . $phoneNumber->country->phonecode . $phoneNumber->number;

            $phoneNumber->delete();

            return response()->success('Number ' . $completeNumber . ' deleted');
        }

        return response()->error('The number does not exist or it does not correspond to your user');
    }
}
