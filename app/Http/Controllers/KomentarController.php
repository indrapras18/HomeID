<?php

namespace App\Http\Controllers;

use App\Models\Komentar;
use Illuminate\Http\Request;

class KomentarController extends Controller
{
    public function add(Request $request){
        Komentar::create($request->all());
        alert()->success('SuccessAlert','Data Berhasil Ditambahkan.');
        return redirect()->route('index');
    }

    public function tampildata($id){
        $data = Komentar::find($id);
        return view('dashboardpage/layouts/components/tampildata',compact('data'));
    }

    public function updatekomentar(Request $request, $id){
        $data = Komentar::find($id);
        $data->update($request->all());
        alert()->success('SuccessAlert','Data Berhasil Diubah.');
        return redirect()->route('tbkomentar');
    }

    public function deletekomentar($id){
        $data = Komentar::find($id);
        $data->delete();
        alert()->success('SuccessAlert','Komentar berhasil di hapus.');
        return redirect()->route('tbkomentar');
    }
}
