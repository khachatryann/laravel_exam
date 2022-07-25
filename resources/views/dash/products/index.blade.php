@extends('layouts.app')
@section('title')
    Products
@endsection
@section('content')
    <x-nav-bar />

    <div class="container">
        <a href="{{ route('products.create') }}" class="btn btn-primary mt-3">Create New Products</a>
        @if(session('success'))
            <div class="alert alert-success mt-2">{{ session('success') }}</div>
        @endif
        <h2 class="mt-2"><span style="color: #d4bee2">Products</span> ( <span style="color: #7FFFD4">{{ count($products) }}</span> )</h2>

        @foreach($products as $product)
            <div class="card w-50 mt-3">
                <div class="card-body">
                    <h2 class="card-title"> Name` <span style="color: #4682B4">{{ $product['name'] }}</span></h2>
                    <h2 class="card-title">Price` <span style="color: #4682B4">{{ $product['price'] }}</span></h2>

                    <a href="{{ route('products.show', $product) }}" class="btn btn-outline-info mt-3">Info</a>
                </div>
            </div>
        @endforeach
    </div>
@endsection


