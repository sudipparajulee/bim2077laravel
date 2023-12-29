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

    }
}
