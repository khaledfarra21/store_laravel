@extends('layouts.admin')
@section('content')
    <div class="py-3 px-2">
        <form action="{{ url('admin/categories/store') }}" method="post">
            @csrf
            <div class="mb-3">
                <label for="nameFormControlInput" class="form-label">Category name</label>
                <input type="text" class="form-control" id="name" name="name" placeholder="Enter the category name">
            </div>
            <div class="mb-3">
                <input class="btn btn-primary" type="submit" value="Create">
            </div>
        </form>
    </div>
@endsection
