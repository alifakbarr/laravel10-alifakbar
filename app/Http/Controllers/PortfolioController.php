<?php

namespace App\Http\Controllers;

use App\Models\Portfolio;
use Illuminate\Http\Request;

class PortfolioController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $title = 'Portfolio';
        $portfolios = Portfolio::get();
        return view('admin/portfolio/index', compact('title', 'portfolios'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $title = 'Create Portfolio';
        return view('admin/portfolio/create', compact('title'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'title' => ['required'],
            'role' =>  ['required'],
        ]);

        date_default_timezone_set('Asia/Jakarta');

        Portfolio::create([
            'title' => $request->title,
            'role' => $request->role,
            'start_at' => $request->start_at,
            'finish_at' => $request->finish_at,
            'link' => $request->link,
            'description' => $request->description,
        ]);

        return redirect()->route('admin.portfolio');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        Portfolio::find($id)->delete();

        return redirect()->route('admin.portfolio');
    }
}
