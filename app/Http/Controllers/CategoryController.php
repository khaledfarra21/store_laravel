<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{

    //? -------- Get all categories -------- ?//
    public function index()
    {
        $categories = Category::all()->sortKeysDesc();

        return view('admin.categories.index', compact('categories'));
    }

    //? -------- Go to create page -------- ?//
    public function create()
    {
        return view('admin.categories.create');
    }

    //? -------- Create new category -------- ?//
    public function store(Request $request)
    {
        $category = new Category();
        $category->name = $request->name;
        $category->save();

        return redirect()->back();
    }

    //? -------- Delete category -------- ?//
    public function destroy($id)
    {
        Category::find($id)->delete();
        return redirect()->back();
    }

    //? -------- Go to edit page -------- ?//
    public function edit($id)
    {
        $category = Category::find($id);
        return view('admin.categories.edit', compact('category'));
    }

    //? -------- Update category -------- ?//
    public function update(Request $request, $id)
    {
        $category = Category::find($id);
        $category->name = $request->name;
        $category->save();

        return redirect('admin/categories');
    }
}
