@extends('layouts.app')
@section('content')
    <h1 class="text-3xl font-bold">Create Category</h1>
    <hr class="h-1 bg-red-500">

    <form action="" class="mt-5">
        <input type="text" placeholder="Category Name" class="block w-full my-4 p-2 rounded">
        <input type="text" placeholder="Priority" class="block w-full my-4 p-2 rounded">

        <div class="flex justify-center">
            <input type="submit" class="bg-blue-600 text-white px-4 mx-2 py-2 rounded">
            <a href="{{ route('category.index') }}" class="bg-red-600 text-white px-10 mx-2 py-2 rounded">Exit</a>
        </div>
    </form>
@endsection
