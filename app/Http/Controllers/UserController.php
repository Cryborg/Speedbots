<?php

namespace App\Http\Controllers;

use App\Bases\ControllerBase;
use App\Http\Requests\UserLoginRequest;
use App\Http\Requests\UserRegisterRequest;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

/**
 * Class UserController
 *
 * @package App\Http\Controllers
 * @group User
 */
class UserController extends ControllerBase
{
    /**
     * Register a user
     *
     * @param \App\Http\Requests\UserRegisterRequest $request
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function register(UserRegisterRequest $request)
    {
        $inputs             = $request->all();
        $inputs["password"] = Hash::make($request->password);

        $user = User::factory()->create($inputs);

        if ($user instanceof User) {
            return response()->json([
                'status'  => 'success',
                'message' => 'Success! Registration completed',
                'user'    => $user,
            ]);
        }

        return response()->json([
            'status'  => 'Failed',
            'message' => 'Registration failed!',
        ]);
    }

    /**
     * Login user
     *
     * @param \App\Http\Requests\UserLoginRequest $request
     *
     * @return JsonResponse
     */
    public function login(UserLoginRequest $request): JsonResponse
    {
        if (Auth::attempt([
              'email'    => $request->email,
              'password' => $request->password,
          ]) || Auth::attempt([
              'username' => $request->username,
              'password' => $request->password,
          ])) {
            $user = Auth::user();
            $token = $user->createToken('token')->plainTextToken;

            return response()->json([
                'success' => true,
                'token'   => $token,
            ]);
        }

        return response()->json([
            'success' => false,
            'message' => 'Whoops! invalid password',
        ]);
    }

    /**
     * Logout the user
     * 
     * @param \Illuminate\Http\Request $request
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function logout(Request $request): JsonResponse
    {
        $request->user()->currentAccessToken()->delete();

        return response()->json([
            'success' => true,
        ]);
    }

    /**
     * Get user details
     *
     * @return JsonResponse
     */
    public function user(): JsonResponse
    {
        if (!is_null($this->authUser)) {
            return response()->json([
                "status" => "success",
                "data"   => $this->authUser->load('roles'),
            ]);
        }

        return response()->json([
            "status"  => "failed",
            "message" => "Whoops! no user found",
        ]);
    }
}
