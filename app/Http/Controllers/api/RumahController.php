<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Rumah;
use Illuminate\Support\Facades\DB;
use Validator;

class RumahController extends Controller
{ 
    public function upload(Request $request){
        $request->validate([
            'tipe_rumah'=>'required',
            'harga_rumah'=> 'required',
            'foto_rumah1'=> 'required',
            'foto_rumah2' => 'required',
            'foto_rumah3' => 'required',
            'luas_bangunan' => 'required',
            'luas_tanah' => 'required',
            'total_kamar_mandi' => 'required',
            'total_kamar' => 'required',
            'total_garasi' => 'required',
            'status' => 'required',
            'alamat_rumah' => 'required',
            'deskripsi' => 'required',
            'id' => 'required',
        ]);

        $result = Rumah::create([
            'tipe_rumah'=>$request->tipe_rumah,
            'harga_rumah'=>$request->harga_rumah,
            'foto_rumah1'=> $request->file('foto_rumah1')->move('fotorumah/', $request->file('foto_rumah1')->getClientOriginalName()),
            'foto_rumah2'=> $request->file('foto_rumah2')->move('fotorumah/', $request->file('foto_rumah2')->getClientOriginalName()),
            'foto_rumah3'=> $request->file('foto_rumah3')->move('fotorumah/', $request->file('foto_rumah3')->getClientOriginalName()),
            'luas_bangunan'=>$request->luas_bangunan,
            'luas_tanah'=>$request->luas_tanah,
            'total_kamar_mandi'=>$request->total_kamar_mandi,
            'total_kamar'=>$request->total_kamar,
            'total_garasi'=>$request->total_garasi,
            'status'=>$request->status,
            'alamat_rumah'=>$request->alamat_rumah,
            'deskripsi'=>$request->deskripsi,
            'id'=>$request->id,
        ]);
        return response()->json(['result' => $result]);
    }

    public function statusTersedia(){
        $data = DB::select('select * from rumahs where status = 1');
        
        if ($data) {
            return response()->json([
                'success' => true,
                'data'    => [$data]
            ], 200);
        }else{
            return response()->json([
                'success' => false,
                'message' => 'Post Tidak Ditemukan!',
                'data'    => null
            ], 401);
        }
    }

    public function statusTerjual(){
        $data = DB::select('select * from rumahs where status = 0');
        
        if ($data) {
            return response()->json([
                'success' => true,
                'data'    => [$data]
            ], 200);
        }else{
            return response()->json([
                'success' => false,
                'message' => 'Post Tidak Ditemukan!',
                'data'    => null
            ], 401);
        }
    }
}
