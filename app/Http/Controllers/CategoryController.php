<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use \Cviebrock\EloquentSluggable\Services\SlugService;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('dashboard.kategori.index',[
            'title' => 'Category',
            'categories' => Category::all()
           ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.kategori.create',[
            'title' => 'Category',
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $Data = $request->validate([
            'name' => 'required',
            'slug'  => 'required|unique:posts',
        ]);

        Category::create($Data);

        return redirect('/category')->with('success', 'Data Berhasil Ditambahkan!!!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Category $category)
    {
        return view('dashboard.kategori.edit', [
            'title' => 'Category',
            'category'          => $category
          ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Category $category)
    {
        $rules = [
            'name' => 'required',
        ];

        if($request->slug != $category->slug){
            $rules['slug'] = 'required|unique:categories';
        }

        $Data = $request->validate($rules);


        Category::where('id', $category->id)
                    ->update($Data);

        return redirect('/category')->with('success', 'Data Berhasil Diedit!!!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Category $category)
    {
        Category::destroy($category->id);
        return redirect('/category')->with('success', 'Data Berhasil Dihapus!!!');
    }

    // public function checkSlug(Request $request)
    // {
    //     $slug = SlugService::createSlug(Category::class, 'slug', $request->name);
    //     return response()->json(['slug' => $slug]);
    // }
}
