<?php

namespace App\Http\Controllers;

use App\Models\user_mobile;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\ValidationException;

class UserMobileController extends Controller
{
    public function adduser(Request $request){
        user_mobile::create([
            'username'=>$request->username,
            'email'=>$request->email,
            'password'=>md5($request->password),
            'alamat'=>$request->alamat,
            'gender'=>$request->gender,
        ]);
        alert()->success('SuccessAlert','Data Berhasil ditambah.');
        return redirect()->route('tbuser');
    }

    public function datauser(){
        $users = user_mobile::all();
        return view('dashboardpage/layouts/components/tbuser',compact('users'));
    }

    public function tampilupdateuser($id){
        $data = user_mobile::find($id);
        return view('dashboardpage/layouts/components/updateuser',compact('data'));
    }

    public function updateuser(Request $request, $id){
        $data = user_mobile::find($id);
        $data->update($request->all());
        alert()->success('SuccessAlert','Data Berhasil diupdate.');
        return redirect()->route('tbuser');
    }

    public function delete($id){
        $data = user_mobile::find($id);
        $data->delete();
        alert()->success('SuccessAlert','Data Berhasil dihapus.');
        return redirect()->route('tbuser');
    }


    // api login
    public function loginM(Request $request){
        $email = $request->input('email');
        $password = $request->input('password');

        $user = DB::table('user_mobiles')->where('email', $email)->first();

        if ($user) {
            if (md5($password, $user->password)) {
                return response()->json(['message' => 'Login berhasil'], 200);
            }
        }

        return response()->json(['error' => 'tidak terdaftar'], 401);
    }

    // api register
    public function registerM(Request $request){
        $username = $request->input('username');
        $email = $request->input('email');
        $password = $request->input('password');
        $alamat = $request->input('alamat');
        $gender = $request->input('gender');

        $existingUser = DB::table('user_mobiles')->where('email', $email)->first();

        if ($existingUser) {
            return response()->json(['error' => 'Email sudah terpakai'], 400);
        }

        $userId = DB::table('user_mobiles')->insertGetId([
            'username' => $username,
            'email' => $email,
            'password' => md5($password),
            'alamat' => $alamat,
            'gender' => $gender,
        ]);

        return response()->json(['message' => 'Registrasi berhasil'], 200);
    }

    // api delete akun
    public function deleteM($id){
        $data = user_mobile::find($id);
        $result=$data->delete();
        if ($result) {
            return ["result"=>"data berhasil dihapus"];
        }else{
            return ["result"=>"data gagal dihapus"];
        }
    }

    // api update
    public function updateM(Request $request){
        $data = user_mobile::findOrFail($request->id);
        if (!$data) {
            return ["result" => "Data tidak ditemukan"];
        }
    
        $data->username = $request->username;
        $data->email = $request->email;
        $data->alamat = $request->alamat;
        $data->gender = $request->gender;
        $result = $data->save();
        if ($result) {
            return ["result" => "Data berhasil diupdate"];
        } else {
            return ["result" => "Data gagal diupdate"];
        }
    }
}