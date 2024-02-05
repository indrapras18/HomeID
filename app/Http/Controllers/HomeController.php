<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Models\Komentar;
use App\Models\Rumah;
use App\Models\User;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $user = User::count();
        $komen = Komentar::count();
        $rumah = Rumah::count();
        $article = Article::count();
        return view('dashboardpage/home',compact('user', 'komen', 'rumah', 'article'));

    }
   
}
