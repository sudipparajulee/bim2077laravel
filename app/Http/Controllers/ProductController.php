<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        $products = Product::all();
        return view('product.index', compact('products'));
    }

    public function create()
    {
        $categories = Category::orderBy('priority')->get();
        return view('product.create',compact('categories'));
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'category_id' => 'required',
            'name' => 'required',
            'description' => 'required',
            'price' => 'required',
            'discounted_price' => 'nullable',
            'stock' => 'required',
            'photopath' => 'required',
        ]);

        if($request->hasFile('photopath')){
            $file = $request->file('photopath');
            $extension = $file->getClientOriginalExtension();
            $filename = time() . '.' . $extension;
            $file->move('images/products/', $filename);
            $data['photopath'] = $filename;
        }

        Product::create($data);
        return redirect(route('product.index'));
    }

    public function edit($id)
    {
        $product = Product::find($id);
        $categories = Category::orderBy('priority')->get();
        return view('product.edit',compact('product','categories'));
    }

    public function update(Request $request, $id)
    {

    }

    public function delete($id)
    {

    }
}
