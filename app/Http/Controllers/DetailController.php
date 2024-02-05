<?php

namespace App\Http\Controllers;

use App\Models\Detail;
use Illuminate\Http\Request;

class DetailController extends Controller
{
    public function tambahdata(Request $request){
        Detail::create($request->all());
        return redirect()->route('tbdetail');
    }
    public function updatedetail($id){
        $data = Detail::find($id);
        return view('dashboardpage/layouts/components/updatedetail',compact('data'));
    }
    public function updatedetails(Request $request, $id){
        $data = Detail::find($id);
        $data->update($request->all());
        return redirect()->route('tbdetail');
    }
    public function hapus($id){
        $data = Detail::find($id);
        $data->delete();
        return redirect()->route('tbdetail');
    }
}
