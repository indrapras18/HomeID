<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Rumah;
use App\Models\Daerah;
use App\Models\Detail;
use App\Models\Article;
use App\Models\Komentar;
use App\Models\Deskripsi;
use App\Models\Perumahan;
use Illuminate\Http\Request;

class PerumahanController extends Controller
{
    public function index(){
        $test = Article::all();
        $data = Deskripsi::all();
        return view('index',compact('test','data'));
    }

    public function loginView(){
        return view('login');
    }

    public function adminView(){
        return view('dashboardpage.dashboard');
    }
    public function userLogin(){
        return view('dashboardpage/layouts/components/userL');
    }

    public function userRegister(){
        return view('dashboardpage/layouts/components/userR');
    }
    
    public function elementsView(){
        return view ('dashboardpage/layouts/components/basicelements');
    }

    public function tableView(){
        return view ('dashboardpage/layouts/components/basictable');
    }

    public function buttonView(){
        return view ('dashboardpage/layouts/components/buttons');
    }

    public function chartView(){
        return view ('dashboardpage/layouts/components/chartjs');
    }

    public function docView(){
        return view ('dashboardpage/layouts/components/documentation');
    }
    public function dropdownView(){
        return view ('dashboardpage/layouts/components/dropdowns');
    }

    public function error1View(){
        return view ('dashboardpage/layouts/components/error404');
    }

    public function error2View(){
        return view ('dashboardpage/layouts/components/error500');
    }

    public function mdiView(){
        return view ('dashboardpage/layouts/components/basicelements');
    }
    public function typoView(){
        return view ('dashboardpage/layouts/components/typography');
    }
    public function tambahdata(){
        return view ('dashboardpage/crud/tambahdata');
    }
    public function tbdetail(){
        $item = Detail::all();
        return view ('dashboardpage/layouts/components/tbdetail', compact('item'));
    }
    public function tbkomentar(){
        $item = Komentar::all();
        return view ('dashboardpage/layouts/components/tbkomentar',compact('item'));
    }
    public function tbpengurus(){
        return view ('dashboardpage/layouts/components/tbpengurus');
    }

    public function tbuser(){
        $item = User::all(); 
        return view ('dashboardpage/layouts/components/tbuser',compact('item'));
    }

    public function profile(){
        $data = User::all();
        return view('dashboardpage/layouts/components/profile',compact('data'));
    }
    public function updateuser(){
        return view('dashboardpage/layouts/components/updateuser');
    }
}