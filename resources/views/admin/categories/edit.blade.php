@extends('layouts.admin')
@section('content')
    <div class="py-3 px-2">
        <form action="{{ url('admin/categories/update/'.$category->id) }}" method="POST">
            @csrf
            @method('PATCH')
            <div class="mb-3">
                <label for="nameFormControlInput" class="form-label">Category name</label>
                <input type="text" class="form-control" id="name" name="name" placeholder="Enter the category name" value="{{ $category->name }}">
            </div>
            <div class="mb-3">
                <button class="btn btn-primary" type="submit">Save</button>
            </div>
        </form>
    </div>
@endsection
