<?php

namespace App\Http\Controllers;

use App\Bases\ControllerBase;
use App\Http\Requests\UserRegisterRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class UserController extends ControllerBase
{

    // User Register
    public function register(UserRegisterRequest $request)
    {
        $inputs             = $request->all();
        $inputs["password"] = Hash::make($request->password);

        $user = User::create($inputs);

        if ($user instanceof User) {
            return response()->json([
                "status"  => "success",
                "message" => "Success! registration completed",
                "data"    => $user,
            ]);
        }

        return response()->json([
            "status"  => "failed",
            "message" => "Registration failed!",
        ]);
    }

    // User login
    public function login(Request $request)
    {

        $validator = Validator::make($request->all(), [
            "email"    => "required|email",
            "password" => "required",
        ]);

        if ($validator->fails()) {
            return response()->json(["validation_errors" => $validator->errors()]);
        }

        $user = User::where("email", $request->email)->first();

        if (is_null($user)) {
            return response()->json([
                "status"  => "failed",
                "message" => "Failed! email not found",
            ]);
        }

        if (Auth::attempt([
              'email'    => $request->email,
              'password' => $request->password,
          ])) {
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

    // User Detail
    public function user()
    {
        if (!is_null($this->authUser)) {
            return response()->json([
                "status" => "success",
                "data"   => $this->authUser,
            ]);
        }

        return response()->json([
            "status"  => "failed",
            "message" => "Whoops! no user found",
        ]);
    }
}
