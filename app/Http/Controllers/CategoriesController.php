<?php

namespace App\Http\Controllers;

use App\Models\Categories;
use Illuminate\Http\Request;

class CategoriesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $title = 'Categories';
        $categories = Categories::latest('created_at')->get();
        return view('admin/categories/index', compact('title', 'categories'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $title = 'Categories';
        return view('admin/categories/create', compact('title'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => ['required'],
        ]);

        date_default_timezone_set('Asia/Jakarta');

        Categories::create([
            'name' => $request->name,
        ]);

        return redirect()->route('admin.categories');
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
        $categories = Categories::find($id);
        $title = $categories->name;
        return view('admin/categories/edit', compact('categories', 'title'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $this->validate($request, [
            'name' => ['required'],
        ]);

        date_default_timezone_set('Asia/Jakarta');

        $categories =  Categories::find($id);
        $categories->update([
            'name' => $request->name,
        ]);

        return redirect()->route('admin.categories');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Categories::find($id)->delete();

        return redirect()->route('admin.categories');
    }
}
