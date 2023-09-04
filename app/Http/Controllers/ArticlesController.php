<?php

namespace App\Http\Controllers;

use App\Models\Articles;
use App\Models\Categories;
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
        $categories = Categories::orderby('name', 'ASC')->get();
        return view('admin/articles/create', compact('title', 'categories'));
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

        $articles = Articles::create([
            'title' => $request->title,
            'slug' => Str::slug($request->title),
            'share' => $request->share,
            'status' => $request->status,
            'content' => $request->content,
        ]);

        $articles->categories()->attach($request->categories);

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
    public function edit($id)
    {
        $articles = Articles::find($id);

        return view('admin/articles/edit', compact('articles'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'title' => ['required'],
            'share' =>  ['required'],
            'status' =>  ['required'],
            'content' =>  ['required'],
        ]);


        $articles =  Articles::find($id);
        $articles->update([
            'title' => $request->title,
            'slug' => Str::slug($request->title),
            'share' => $request->share,
            'status' => $request->status,
            'content' => $request->content,
        ]);

        return redirect()->route('admin.articles');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        Articles::find($id)->delete();

        return redirect()->route('admin.articles');
    }
}
