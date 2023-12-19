@extends('layouts.app')
@section('content')
    <h1 class="text-3xl font-bold">Dashboard</h1>
    <hr class="h-1 bg-red-500">

    <div class="mt-5 grid grid-cols-3 gap-10">

        <div class="bg-blue-600 flex justify-between text-white shadow-lg rounded-lg p-5">
            <h1 class="text-2xl font-bold">Total Categories</h1>
            <h1 class="text-5xl font-bold">20</h1>
        </div>

        <div class="bg-green-600 flex justify-between text-white shadow-lg rounded-lg p-5">
            <h1 class="text-2xl font-bold">Total Products</h1>
            <h1 class="text-5xl font-bold">20</h1>
        </div>

        <div class="bg-red-600 flex justify-between text-white shadow-lg rounded-lg p-5">
            <h1 class="text-2xl font-bold">Total Orders</h1>
            <h1 class="text-5xl font-bold">20</h1>
        </div>

    </div>
@endsection
