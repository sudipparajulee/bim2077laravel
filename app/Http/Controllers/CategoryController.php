<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index()
    {
        // $categories = Category::all();
        $categories = Category::orderBy('priority')->get();
        return view('category.index',compact('categories'));
    }

    public function create()
    {
        return view('category.create');
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'categoryname' => 'required',
            'priority' => 'required|numeric',
        ]);

        Category::create($data);
        return redirect(route('category.index'));
    }

    public function edit($id)
    {
        $category = Category::findOrFail($id);
        return view('category.edit',compact('category'));
    }

    public function update(Request $request, $id)
    {
        $data = $request->validate([
            'categoryname' => 'required',
            'priority' => 'required|numeric',
        ]);

        $category = Category::findOrFail($id);
        $category->update($data);
        return redirect(route('category.index'));
    }

    public function delete($id)
    {
        $category = Category::findOrFail($id);
        $category->delete();
        return redirect(route('category.index'));
    }
}
