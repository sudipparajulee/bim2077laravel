@extends('layouts.app')
@section('content')
    <h1 class="text-3xl font-bold">Categories</h1>
    <hr class="h-1 bg-red-500">

    <div class="my-5 text-right">
        <a href="{{ route('category.create') }}" class="bg-blue-600 text-white px-4 py-2 rounded">Add Category</a>

    </div>

    <table class="text-center mt-5 w-full">
        <tr>
            <th class="border border-gray-200 p-2 bg-gray-300">Order</th>
            <th class="border border-gray-200 p-2 bg-gray-300">Category Name</th>
            <th class="border border-gray-200 p-2 bg-gray-300">Action</th>
        </tr>
        @foreach($categories as $category)
        <tr>
            <td class="border border-gray-200 p-2">{{$category->priority}}</td>
            <td class="border border-gray-200 p-2">{{$category->categoryname}}</td>
            <td class="border border-gray-200 p-2">
                <a href="{{route('category.edit',$category->id)}}" class="bg-blue-600 text-white px-2 py-1 rounded mx-1">Edit</a>
                <a onclick="return confirm('Are you sure to delete?')" href="{{route('category.delete',$category->id)}}" class="bg-red-600 text-white px-2 py-1 rounded mx-1">Delete</a>
            </td>
        </tr>
        @endforeach
    </table>
@endsection
