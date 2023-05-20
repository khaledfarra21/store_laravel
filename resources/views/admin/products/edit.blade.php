@extends('layouts.admin')
@section('content')
    <div class="py-3 px-2">
        <form action="{{ url('admin/products/update/'.$product->id) }}" method="POST">
            @csrf
            @method('PATCH')
            <div class="mb-3">
                <label for="nameFormControlInput" class="form-label">Product name</label>
                <input type="text" class="form-control" id="name" name="name" placeholder="Enter the product name" value="{{ $product->name }}">
            </div>
            <div class="mb-3">
                <label for="priceFormControlInput" class="form-label">Category</label>
                <select class="form-select" id="category" name="category_id" >
                    <option selected value="{{ $category_name->id }}">{{ $category_name->name }}</option>
                    @foreach ($categories as $category)
                    <option value="{{ $category->id }}">{{ $category->name }}</option>
                    @endforeach
                </select>
            </div>
            <div class="mb-3">
                <label for="priceFormControlInput" class="form-label">Price</label>
                <input type="number" class="form-control" id="price" name="price" placeholder="Enter the price" value="{{ $product->price }}">
            </div>
            <div class="mb-3">
                <label for="imageFormControlInput" class="form-label">Image URL</label>
                <input type="text" class="form-control" id="image" name="image" placeholder="Enter the image" value="{{ $product->image }}">
            </div>
            <div class="mb-3">
                <label for="detailsFormControlTextarea" class="form-label">Details</label>
                <textarea class="form-control" id="details" rows="3">{{ $product->details }}</textarea>
            </div>
            <div class="mb-3">
                <button class="btn btn-primary" type="submit">Save</button>
            </div>
        </form>
    </div>
@endsection
