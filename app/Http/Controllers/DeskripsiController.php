<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Deskripsi;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DeskripsiController extends Controller
{
    //
    public function deskripsi(){
        // $deskripsi= Deskripsi::all();
        $deskripsi = DB::table('deskripsis')
        ->join('users', 'users.id_user', '=', 'deskripsis.id_user')
        ->select('users.name', 'deskripsis.*')
        ->orderBy('deskripsis.id_deskripsi', 'asc')
        ->get();
        return view('dashboardpage/layouts/components/deskripsi', compact('deskripsi'));
    }

    public function updatedeskripsi($id){
        $data = Deskripsi::find($id);
        $penulis = User::all();
        return view('dashboardpage/layouts/components/updatedeskripsi',compact('data','penulis')); 
    }

    public function update(Request $request, $id){
        $data = Deskripsi::find($id);
        $data->update($request->all());
        return redirect()->route('deskripsi');
    }


}
