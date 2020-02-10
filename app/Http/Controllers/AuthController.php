<?php

namespace App\Http\Controllers;

use App\Http\Requests\RegisterFormRequest;
use Tymon\JWTAuth\Exceptions\JWTException;
use Tymon\JWTAuth\Facades\JWTAuth;
use Illuminate\Http\Request;
use App\User;
use App\Providers\ResponseServiceProvider;

class AuthController extends Controller
{
    /**
     * @param RegisterFormRequest $request
     *
     * @return ResponseServiceProvider
     */
    public function register(RegisterFormRequest $request)
    {
        $user = new User();
        $user->email = $request->email;
        $user->name = $request->name;
        $user->password = bcrypt($request->password);
        $user->save();

        return response()->success('', $user);
    }

    /**
     * @param Request $request
     *
     * @return ResponseServiceProvider
     */
    public function login(Request $request)
    {
        $credentials = $request->only('email', 'password');

        if (!$token = JWTAuth::attempt($credentials)) {
            return response()->error('Invalid Credentials');
        }

        return response()->success('', $token);
    }

    /**
     * @param Request $request
     *
     * @return ResponseServiceProvider
     * @throws \Illuminate\Validation\ValidationException
     */
    public function logout(Request $request)
    {
        $this->validate($request, ['token' => 'required']);

        try {
            JWTAuth::invalidate($request->input('token'));

            return response()->success('You have successfully logged out');
        } catch (JWTException $e) {
            return response()->error('Failed to logout, please try again');
        }
    }
}