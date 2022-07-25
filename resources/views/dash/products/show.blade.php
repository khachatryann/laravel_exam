@extends('layouts.app')
@section('title') {{ $product['name'] }}
@endsection
@section('content')
    <div class="container">
        <a href="{{ route('products.index') }}" class="btn btn-secondary mt-3">Back</a>
        <div class="card w-50 mt-2">
            <div class="card-body">
                <h2 class="card-title">Name` <span style="color: #4682B4">{{ $product['name'] }}</span></h2>
                <h2 class="card-title">Price` <span style="color: #4682B4">{{ $product['price'] }}</span></h2>
                <h2 class="card-title">Qt` <span style="color: #4682B4">{{ $product['qt'] }}</span></h2>
                <h2 class="card-title">Created At` <span style="color: #4682B4">{{ $product['created_at'] }}</span></h2>

                <a href="{{ route('products.edit', $product['id']) }}" class="btn btn-success">Edit</a>

                <form action="{{ route('products.destroy', $product['id']) }}" method="post">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger mt-2">Delete</button>
                </form>
            </div>
        </div>
    </div>
@endsection
