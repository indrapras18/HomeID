<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProfileController extends Controller
{
    public function edit(){
        return view('dashboardpage/layouts/components/updateprofile');
    }

    public function updateprof(Request $request){
        $request->validate([

            'name' => ['string', 'min:3', 'max:191','required'],
            'email' => ['email','string', 'min:3', 'max:191','required'],
            'phone' => ['string', 'min:3', 'max:191','required'],

        ]);

        auth()->user()->update([

            'name' => $request->name,
            'email' => $request->email,
            'phone' => $request->phone,
        ]);
        alert()->success('SuccessAlert','Profile berhasil diubah.');
        return redirect()->route('profile');
    }

    public function deleteprofile(){
        $user = Auth::user();

        if ($user) {
            $user->delete();
            alert()->success('SuccessAlert','Profile berhasil dihapus.');
            return redirect()->route('home');
        }
}
}