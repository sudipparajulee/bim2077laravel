@extends('layouts.app')
@section('content')
    <h1 class="text-3xl font-bold">Create Product</h1>
    <hr class="h-1 bg-red-500">

    <form action="{{route('product.store')}}" method="POST" class="mt-5" enctype="multipart/form-data">
        @csrf
        <select name="category_id" id="" class="block w-full my-4 p-2 rounded">
            @foreach ($categories as $category)
                <option value="{{$category->id}}">{{$category->categoryname}}</option>
            @endforeach
        </select>
        <input type="text" placeholder="Product Name" name="name" class="block w-full my-4 p-2 rounded">
        @error('name')
            <div class="text-red-600 -mt-5">{{$message}}</div>
        @enderror
        <input type="text" placeholder="Description" name="description" class="block w-full my-4 p-2 rounded">
        @error('description')
            <div class="text-red-600 -mt-5">{{$message}}</div>
        @enderror
        <input type="text" placeholder="Price" name="price" class="block w-full my-4 p-2 rounded">
        @error('price')
            <div class="text-red-600 -mt-5">{{$message}}</div>
        @enderror
        <input type="text" placeholder="Discounted Price" name="discounted_price" class="block w-full my-4 p-2 rounded">
        @error('discounted_price')
            <div class="text-red-600 -mt-5">{{$message}}</div>
        @enderror
        <input type="text" placeholder="Stock" name="stock" class="block w-full my-4 p-2 rounded">
        @error('stock')
            <div class="text-red-600 -mt-5">{{$message}}</div>
        @enderror
        <input type="file"  name="photopath" class="block w-full my-4 p-2 rounded">
        @error('photopath')
            <div class="text-red-600 -mt-5">{{$message}}</div>
        @enderror

        <div class="flex justify-center">
            <input type="submit" class="bg-blue-600 text-white px-4 mx-2 py-2 rounded">
            <a href="{{ route('product.index') }}" class="bg-red-600 text-white px-10 mx-2 py-2 rounded">Exit</a>
        </div>
    </form>
@endsection
