@extends('layouts.app')
@section('title')
    Update Customer
@endsection
@section('content')
    <div class="container">
        <a href="{{ route('products.index') }}" class="btn btn-secondary mt-3">Back</a>

        <form action="{{ route('products.update', $product['id']) }}" class="w-50 mt-2" method="post">
            @csrf
            @method('PATCH')
            <div class="mb-3">
                <label for="name" class="form-label">Product Name</label>
                <input value="{{ $product['name'] }}" type="text" class="form-control" id="name" placeholder="Product" name="name">
            </div>

            <div class="mb-3">
                <label for="price" class="form-label">Product Price</label>
                <input value="{{ $product['price'] }}" type="text" class="form-control" id="price" min="1" placeholder="10" name="price">
            </div>

            <div class="mb-3">
                <label for="qt" class="form-label">Product Quantity</label>
                <input value="{{ $product['qt'] }}" type="number" class="form-control" id="qt" min="1" placeholder="10" name="qt">
            </div>


            <button class="btn btn-primary">Save</button>
        </form>
    </div>
@endsection
