<?php

namespace App\Http\Controllers;

use App\Models\Rumah;
use App\Models\User;
use App\Models\user_mobile;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class RumahController extends Controller{

    public function addrumah(Request $request){
        $this->validate($request,[
            'tipe_rumah' => 'required',
            'harga_rumah' => 'required',
            // 'foto_rumah1' => 'required|mimes:jpg,jpeg,png|max:2048',
            // 'foto_rumah2' => 'required|mimes:jpg,jpeg,png|max:2048',
            // 'foto_rumah3' => 'required|mimes:jpg,jpeg,png|max:2048',
            'luas_bangunan' => 'required',
            'luas_tanah' => 'required',
            'total_kamar_mandi' => 'required',
            'total_kamar' => 'required',
            'total_garasi' => 'required',
            'alamat_rumah' => 'required',
            'id' => 'required',
            'deskripsi' => 'required',
        ],
        [
            'tipe_rumah.required' => 'Tipe Rumah Wajib Diisi',
            'harga_rumah.required' => 'Harga Rumah Wajib Diisi',
            'foto_rumah1.required' => 'Foto Rumah 1 Wajib Diisi',
            'foto_rumah1.mimes' => 'Masukkan gambar berupa jpg dan jpeg',
            'foto_rumah2.required' => 'Foto Rumah 2 Wajib Diisi',
            'foto_rumah3.required' => 'Foto Rumah 3 Wajib Diisi',
            'luas_bangunan.required' => 'Luas Bangunan Wajib Diisi',
            'luas_tanah.required' => 'Luas Tanah Wajib Diisi',
            'total_kamar_mandi.required' => 'Jumlah Kamar Mandi Wajib Diisi',
            'total_kamar.required' => 'Jumlah Kamar Wajib Diisi',
            'total_garasi.required' => 'Jumlah Garasi Wajib Diisi',
            'alamat_rumah.required' => 'Alamat Wajib Diisi',
            'id.required' => 'Nama Penjual Wajib Diisi',
            'deskripsi.required' => 'Deskripsi Wajib Diisi',

        ]);

        $data = Rumah::create($request->all());
        if ($request->hasFile('foto_rumah1')) {
            $request->file('foto_rumah1')->move('fotorumah/', $request->file('foto_rumah1')->getClientOriginalName());
            $data->foto_rumah1 = $request->file('foto_rumah1')->getClientOriginalName();
            $data->save();
        }
        if ($request->hasFile('foto_rumah2')) {
            $request->file('foto_rumah2')->move('fotorumah/', $request->file('foto_rumah2')->getClientOriginalName());
            $data->foto_rumah2 = $request->file('foto_rumah2')->getClientOriginalName();
            $data->save();
        }
        if ($request->hasFile('foto_rumah3')) {
            $request->file('foto_rumah3')->move('fotorumah/', $request->file('foto_rumah3')->getClientOriginalName());
            $data->foto_rumah3 = $request->file('foto_rumah3')->getClientOriginalName();
            $data->save();
        }
        alert()->success('SuccessAlert','Rumah Berhasil ditambah.');
        return redirect()->route('tbrumah');
    }

    public function status($id){
        $data = DB::table('rumahs')->where('id_rumah',$id)->first();
        $status_sekarang = $data->status;
        if ($status_sekarang == 1) {
            DB::table('rumahs')->where('id_rumah',$id)->update([
                'status'=>0
            ]);
        } else {
            DB::table('rumahs')->where('id_rumah',$id)->update([
                'status'=>1
            ]);
        }
        
        alert()->success('SuccessAlert','Status Berhasih Diubah.');
        return redirect('tbrumah');
    }

    public function deleterumah($id){
        $data = Rumah::find($id);
        $data->delete();
        alert()->success('SuccessAlert','Rumah berhasil di hapus.');
        return redirect()->route('tbrumah');
    }

    public function tbrumah(){
        $dataRumah = Rumah::all();
        return view('dashboardpage/layouts/components/tbrumah', compact('dataRumah'));
    }

    public function tambahrumah(){
        $name = user_mobile::all();
        return view('dashboardpage/layouts/components/tambahrumah',compact('name'));
    }

    public function tampilupdate($id){
        $item = user_mobile::all();
        $data = Rumah::find($id);
        return view('dashboardpage/layouts/components/updaterumah',compact('item','data'));
    }

    public function updaterumah(Request $request, $id){
        
        $data = Rumah::find($id);
        $data->update($request->all());
        alert()->success('SuccessAlert','Data Berhasil Diubah.');
        return redirect()->route('tbrumah');
    }
    
}