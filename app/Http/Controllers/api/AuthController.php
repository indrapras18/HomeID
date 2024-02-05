<?php

namespace App\Http\Controllers\API;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class AuthController extends Controller
{
    public function register(Request $request){
        $validator = Validator::make($request->all(),[
            'name' => 'required',
            'email' => 'required|email',
            'password' => 'required',
            'confirm_password' => 'required|same:password',
        ]);

        if ($validator->fails()) {
            return response()->json([
                'success' => false,
                'massage' => 'keknya ada yang salah',
                'data' => $validator->errors()
            ]);
        }

        $input = $request->all();
        $input['password'] = bcrypt($input['password']);
        $user = User::create($input);

        $success['token'] = $user->createToken('auth_token')->plainTextToken;
        $success['name'] = $user->name;

        return response()->json([
            'success' => true,
            'massage' => 'Berhasil Register Dek',
            'data' => $success
        ]);
    }

    public function login(Request $request){
        if(Auth::attempt(['email' => $request->email, 'password'=> $request->password])){
            $auth =  Auth::user();
            $success['token'] = $auth->createToken('auth_token')->plainTextToken;
            $success['name'] = $auth->name;

            return response()->json([
                'success' => true,
                'massage' => 'login sukses dek',
                'data' => $success
            ]);
        }else{
            return response()->json([
                'success' => false,
                'massage' => 'login gagal dek',
                'data' => null  
            ]);
        }
    }
}
