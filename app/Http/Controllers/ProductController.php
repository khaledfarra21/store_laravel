<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{

    //? -------- Get all products to homepage -------- ?//
    public function indexHomePage()
    {
        $products = Product::all()->sortDesc(); // to show the lastest products first
        $products = Product::paginate(8);
        return view('home.shop', compact('products'));
    }

    //? -------- Get all products -------- ?//
    public function index()
    {
        $products = Product::all();
        return view('admin.products.index', compact('products'));
    }

    //? -------- Go to create page -------- ?//
    public function create()
    {
        $categories = Category::all(); // we need get all categories and send it to create product page

        return view('admin.products.create', compact('categories'));
    }

    //? -------- Create new product -------- ?//
    public function store(Request $request)
    {
        $product = new Product();
        $product->name = $request->name;
        $product->details = $request->details;
        $product->price = $request->price;
        $product->category_id = $request->category_id;
        $product->image = $request->image;
        $product->save();

        return redirect()->back();
    }

    //? -------- Delete product -------- ?//
    public function destroy($id)
    {
        Product::find($id)->delete();
        return redirect()->back();
    }

    //? -------- Go to edit page -------- ?//
    public function edit($id)
    {
        $product = Product::find($id);
        $categories = Category::all();
        $category_name = Category::find($product->category_id);
        return view('admin.products.edit', compact('product', 'categories', 'category_name'));
    }

    //? -------- Update product -------- ?//
    public function update(Request $request, $id)
    {
        $product = Product::find($id);
        $product->name = $request->name;
        $product->details = $request->details;
        $product->price = $request->price;
        $product->category_id = $request->category_id;
        $product->image = $request->image;
        $product->save();

        return redirect('admin/products');
    }
}
