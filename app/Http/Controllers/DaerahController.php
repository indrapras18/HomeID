<?php

namespace App\Http\Controllers;

use App\Models\Daerah;
use Illuminate\Http\Request;

class DaerahController extends Controller
{
    public function addDaerah(Request $request){
        Daerah::create($request->all());
        return redirect()->route('tbdaerah');
    }
    public function updatedaerah($id){
        $data = Daerah::find($id);
        return view('dashboardpage/layouts/components/updatedaerah',compact('data'));
    }
    public function update(Request $request, $id){
        $data = Daerah::find($id);
        $data->update($request->all());
        return redirect()->route('tbdaerah');
    }
    // public function data(){
    //     $datakomen = Daerah::all();
    //     return view('data',compact('tbdaerah'));
    // }
    public function tbdaerah(){
        $item = Daerah::all();
        return view ('dashboardpage/layouts/components/tbdaerah',compact('item'));
    }
    public function deletedaerah($id){
        $data = Daerah::find($id);
        $data->delete();
        return redirect()->route('tbdaerah');
    }
}
