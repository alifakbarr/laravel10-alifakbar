<?php

namespace App\Http\Controllers;

use App\Models\Articles;
use App\Models\Portfolio;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $title = 'alifakbarr';
        $articles = Articles::latest('created_at')->get();
        return view('user/index', compact('title', 'articles'));
    }
    public function show($id)
    {
        $article = Articles::where('id', $id)->first();
        return view('user/show', compact('article'));
    }
    public function portfolio()
    {
        $title = 'Portfolio';
        $portfolios = Portfolio::latest('created_at')->get();
        return view('user/portfolio', compact('title', 'portfolios'));
    }
}
