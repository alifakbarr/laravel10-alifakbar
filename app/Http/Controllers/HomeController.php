<?php

namespace App\Http\Controllers;

use App\Models\Portfolio;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function portfolio()
    {
        $title = 'Portfolio';
        $portfolios = Portfolio::latest('created_at')->get();
        return view('user/portfolio', compact('title', 'portfolios'));
    }
}
