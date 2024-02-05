<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Article;
use App\Models\Deskripsi;
use Illuminate\Http\Request;

class ArticleController extends Controller
{
    public function article(){
        $penulis = User::all();
        return view('dashboardpage/layouts/components/article',compact('penulis'));
    }

    public function createarticle(Request $request){
        $this->validate($request, [
            'judul' => 'required|max:30',
            'ringkasan' => 'required|max:30',
            'foto_article' => 'required|mimes:jpg,jpeg,png'
        ],
        [
            'judul.required' => 'Judul harap diisi',
            'ringkasan.required' => 'Ringkasan harap diisi',
            'judul.required' => 'Harap isikan judul',
            'judul.max' => 'judul harus kurang dari 30 karakter',
            'ringkasan.required' => 'Harap masukkan ringkasan',
            'ringkasan.max' => 'Ringkasan   harus kurang dari 30 karakter',
            'foto_article.required' => 'Harap masukkan foto',
        ]);

        $data = Article::create($request->all());
        if ($request->hasFile('foto_article')) {
            $request->file('foto_article')->move('foto article/', $request->file('foto_article')->getClientOriginalName());
            $data->foto_article = $request->file('foto_article')->getClientOriginalName();
            $data->save();
        }
        alert()->success('SuccessAlert','Article berhasil ditambah.');
        return redirect()->route('tbartikel');
    }

    public function show(){
        $test = Article::all();
        $data = Deskripsi::all();
        return view('index',compact('test','data'));
    }

    public function bacaarticle($id){
        $data = Article::find($id);
        return view('dashboardpage/layouts/components/bacaarticle',compact('data'));
    }

    public function tbartikel(){
        $rows = Article::all();
        return view('dashboardpage/layouts/components/tbartikel',compact('rows'));
    }

    public function deleteaerticle($id){
        $data = Article::find($id);
        $data->delete();
        alert()->success('SuccessAlert','Rumah berhasil dihapus.');
        return redirect()->route('tbartikel');
    }

    public function updatearticle($id){
        $data = Article::find($id);
        return view('dashboardpage/layouts/components/updatearticle',compact('data'));
    }

    public function updatedata(Request $request, $id){
        $data = Article::find($id);
        $data->update($request->all());
        alert()->success('SuccessAlert','Rumah berhasil diupdate.');
        return redirect()->route('tbartikel');
    }
}
