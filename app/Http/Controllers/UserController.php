<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\ValidationException;

class UserController extends Controller
{
    public function index(Request $request){
        return $request->user();
    }

    // public function adduser(Request $request){
    //     User::create([
    //         'name'=>$request->name,
    //         'email'=>$request->email,
    //         'password'=>bcrypt($request->password),
    //         'gender'=>$request->gender,
    //     ]);
    //     return redirect()->route('tbuser');
    // }

    // public function tampilupdateuser($id){
    //     $data = User::find($id);
    //     return view('dashboardpage/layouts/components/updateuser',compact('data'));
    // }

    // public function updateuser(Request $request, $id){
    //     $data = User::find($id);
    //     $data->update($request->all());
    //     return redirect()->route('tbuser');
    // }

    // public function delete($id){
    //     $data = User::find($id);
    //     $data->delete();
    //     alert()->success('SuccessAlert','Data Berhasil dihapus.');
    //     return redirect()->route('tbuser');
    // }
    
    // api

    // public function register(Request $request){

    //     $request->validate([
    //         'name'=>'required',
    //         'email'=> 'required|email|unique:users',
    //         'password'=> 'required',
    //         'gender' => 'required',
    //     ]);


    //     $result = User::create([
    //         'name'=>$request->name,
    //         'email'=>$request->email,
    //         'password'=>bcrypt($request->password),
    //         'gender'=>$request->gender,
    //         'api_token' => Str::random(80),
    //     ]);

    //     $token = $result->createToken('api_token')->plainTextToken;
    //     return response()->json([
    //         'data' => $result,
    //         'access_token' => $token,
    //         'token_type' => 'Bearer',
    //         'error' => false,
    //         'massage' => "data berhasil siupload"

    //     ]);
    // }

    // public function login(Request $request){    
    //     if (!Auth::attempt($request->only('email', 'password')))
    //     {
    //         return response()->json(['message' => 'Unauthorized'], 401);
    //     }

    //     $user = User::where('email', $request['email'])->firstOrFail();
    //     $token = $user->createToken('auth_token')->plainTextToken;
    //     return response()->json(['message' => 'Hi '.$user->name.', welcome to home','access_token' => $token, 'token_type' => 'Bearer', ]);
    // }

    // public function logout(Request $request){
    //     $request->user()->forceFill([
    //         'api_token'=>null,
    //     ])->save();
    //     return response()->json(['message'=>'success']);
    // }

    // public function login(Request $request)
    // {
    //     $credentials = $request->only('email', 'password');
    //     if (Auth::attempt($credentials)) {
    //         $user = Auth::user();
    //         $token = $user->createToken('MyApp')->accessToken;
    //         return response()->json(['token' => $token], 200);
    //     } else {
    //         return response()->json(['error' => 'Unauthorized'], 401);
    //     }
    // }


    public function login(Request $request)
    {
        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);

        if (Auth::attempt($credentials)) {
            $user = Auth::user();
            $token = $user->createToken('auth-token')->plainTextToken;

            return response()->json([
                'success' => true,
                'token' => $token,
                'name' => $user->name,
            ]);
        }

        throw ValidationException::withMessages([
            'email' => ['The provided credentials are incorrect.'],
        ]);
    }

    public function register(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:6',
        ]);

        if ($validator->fails()) {
            return response()->json(['error' => $validator->errors()], 400);
        }

        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => bcrypt($request->password),
        ]);

        $token = $user->createToken('MyApp')->accessToken;

        return response()->json(['token' => $token], 200);
    }
}
