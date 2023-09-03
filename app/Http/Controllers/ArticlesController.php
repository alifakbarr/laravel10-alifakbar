<?php

namespace App\Http\Controllers;

use App\Models\Articles;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class ArticlesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $title = 'Articles';
        $articles = Articles::latest('created_at')->get();
        return view('admin/articles/index', compact('title', 'articles'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $title = 'Create Articles';
        return view('admin/articles/create', compact('title'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // dd($request);
        $this->validate($request, [
            'title' => ['required'],
            'share' =>  ['required'],
            'status' =>  ['required'],
            'content' =>  ['required'],
        ]);

        Articles::create([
            'title' => $request->title,
            'slug' => Str::slug($request->title),
            'share' => $request->share,
            'status' => $request->status,
            'content' => $request->content,
        ]);

        return redirect()->route('admin.articles');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $articles = Articles::find($id);

        return view('admin/articles/show', compact('articles'));
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
    public function destroy(string $id)
    {
        //
    }
}