<?php

namespace App\Http\Controllers;

use App\Bases\ControllerBase;
use App\Http\Requests\UserRegisterRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
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
            "status"  => "failed",
            "message" => "Registration failed!",
        ]);
    }

    /**
     * Login user
     *
     * @param \Illuminate\Http\Request $request
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function login(Request $request)
    {

        $validator = Validator::make($request->all(), [
            "email"    => "required|email",
            "password" => "required",
        ]);

        if ($validator->fails()) {
            return response()->json(["validation_errors" => $validator->errors()]);
        }

        if (Auth::attempt([
              'email'    => $request->email,
              'password' => $request->password,
          ])) {
            $user = Auth::user();
            $token = $user->createToken('token')->plainTextToken;

            return response()->json([
                "status" => "success",
                "login"  => true,
                "token"  => $token,
                "data"   => $this->authUser,
            ]);
        }

        return response()->json([
            "status"  => "failed",
            "success" => false,
            "message" => "Whoops! invalid password",
        ]);
    }

    /**
     * Get user details
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function user()
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
