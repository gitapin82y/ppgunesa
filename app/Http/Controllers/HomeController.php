<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\News;

class HomeController extends Controller
{
    public function index(){
        $news = News::orderBy('date', 'desc')->take(9)->get();
        return view('index',compact('news'));
    }
    public function allBerita(){
        $news = News::orderBy('date', 'desc')->paginate(10);
        return view('news',compact('news'));
    }
}
