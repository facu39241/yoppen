<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;
use App\Http\Requests\CategoryRequest;

class CategoryController extends Controller
{
    
    public function index()
    {
        $categories = Category::all();
        return view('category.index')->with(['categories' => $categories]);
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        $category = new Category;
        $category->fill(
            $request->only(
                'name',
                'description'
            )
        );
        $category->save();
        return redirect()->to('/categories');
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        //
    }

    public function update(category $category)
    {
        $category->name = request()->name;
        $category->description = request()->description;
        $category->save();

        return redirect('/categories');
    }

    public function destroy(category $category)
    {
        $category->delete();

        return redirect('/categories');
    }
}
