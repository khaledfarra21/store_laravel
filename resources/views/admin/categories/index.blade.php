@extends('layouts.admin')
@section('content')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <div class="py-3 px-2">
        <table class="table table-striped-columns">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Category name</th>
                    <th scope="col">Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($categories as $category)
                    <tr>
                        <th scope="row">{{ $category->id }}</th>
                        <td>{{ $category->name }}</td>
                        <td>
                            <form action="{{ url('admin/categories/edit/' . $category->id) }}" method="GET">
                                <button type="submit" class="btn btn-info"><a
                                        href="{{ url('categories/edit/' . $category->id) }}"></a><i
                                        class="fa fa-edit"></i></button>
                            </form>
                            <form action="{{ url('admin/categories/delete/' . $category->id) }}" method="GET">
                                <button type="submit" class="btn btn-danger"><a
                                        href="{{ url('categories/delete/' . $category->id) }}"></a><i
                                        class="fa fa-trash"></i></button>
                            </form>

                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>

    <div>
        <form action=" {{ url('admin/categories/create') }}" method="GET">
            <button class="btn btn-primary" type="submit">Create new Category</button>
        </form>
    </div>

@endsection
