<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;


class AutfController extends Controller
{
    public function register(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required|string',
            'email' => 'required|email|unique:users',
            'password' => 'required|string',
        ]);

        if ($validator->fails()) {
            return response()->json($validator->errors());
        }

        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password)
        ]);

        $token = $user->createToken('token-r')->plainTextToken;

        return response()->json([
            'User info - ' => $user,
            'Token info - ' => $token
        ]);
    }



    public function login(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'email' => 'required|email',
            'password' => 'required|string',
        ]);

        if ($validator->fails()) {
            return response()->json($validator->errors());
        }

        if (!Auth::attempt($request->only('email', 'password'))) {
            return response()->json(['Info - ' => 'Proverite email i password!']);
        }

        $user = User::where('email', $request['email'])->firstOrFail();

        $tokenLogin = $user->createToken('token-l')->plainTextToken;

        return response()->json([
            'User info - ' => $user,
            'Token info - ' => $tokenLogin
        ]);
    }


    public function logout()
    {
        auth()->user()->tokens()->delete();
        return response()->json([
            'Poruka - ' => 'Uspesno logoutovanje',
        ]);
    }
}
