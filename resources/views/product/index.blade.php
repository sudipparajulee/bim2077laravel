@extends('layouts.app')
@section('content')
    <h1 class="text-3xl font-bold">Products</h1>
    <hr class="h-1 bg-red-500">

    <div class="my-5 text-right">
        <a href="{{ route('product.create') }}" class="bg-blue-600 text-white px-4 py-2 rounded">Add Product</a>

    </div>

    <table class="text-center mt-5 w-full">
        <tr>
            <th class="border border-gray-200 p-2 bg-gray-300">S.N.</th>
            <th class="border border-gray-200 p-2 bg-gray-300">Product Name</th>
            <th class="border border-gray-200 p-2 bg-gray-300">Product Description</th>
            <th class="border border-gray-200 p-2 bg-gray-300">Price</th>
            <th class="border border-gray-200 p-2 bg-gray-300">Category</th>
            <th class="border border-gray-200 p-2 bg-gray-300">Discounted Price</th>
            <th class="border border-gray-200 p-2 bg-gray-300">Photo</th>
            <th class="border border-gray-200 p-2 bg-gray-300">Action</th>
        </tr>
        @foreach($products as $product)
        <tr>
            <td class="border border-gray-200 p-2">{{$product->id}}</td>
            <td class="border border-gray-200 p-2">{{$product->name}}</td>
            <td class="border border-gray-200 p-2">{{$product->description}}</td>
            <td class="border border-gray-200 p-2">{{$product->price}}</td>
            <td class="border border-gray-200 p-2">{{$product->category_id}}</td>
            <td class="border border-gray-200 p-2">{{$product->discounted_price}}</td>
            <td class="border border-gray-200 p-2">{{$product->photopath}}</td>
            <td class="border border-gray-200 p-2">
                <a href="{{route('product.edit',$product->id)}}" class="bg-blue-600 text-white px-2 py-1 rounded mx-1">Edit</a>
                <a onclick="return confirm('Are you sure to delete?')" href="{{route('product.delete',$product->id)}}" class="bg-red-600 text-white px-2 py-1 rounded mx-1">Delete</a>
            </td>
        </tr>
        @endforeach
    </table>
@endsection
