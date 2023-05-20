@extends('layouts.admin')
@section('content')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <div class="py-3 px-2">
        <table class="table table-striped-columns">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Product name</th>
                    <th scope="col">Category</th>
                    <th scope="col">Price</th>
                    <th scope="col">Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($products as $product)
                    <tr>
                        <th scope="row">{{ $product->id }}</th>
                        <td>{{ $product->name }}</td>
                        <td>{{ $product->category_id }}</td>
                        <td>{{ $product->details }}</td>
                        <td>{{ $product->price }}</td>
                        <td>
                            <form action="{{ url('admin/products/edit/' . $product->id) }}" method="GET">
                                <button type="submit" class="btn btn-info"><a
                                        href="{{ url('products/edit/' . $product->id) }}"></a><i
                                        class="fa fa-edit"></i></button>
                            </form>

                            <form action="{{ url('admin/products/delete/' . $product->id) }}" method="GET">
                                <button type="submit" class="btn btn-danger"><a
                                        href="{{ url('products/delete/' . $product->id) }}"></a><i
                                        class="fa fa-trash"></i></button>
                            </form>

                        </td>
                    </tr>
                @endforeach

            </tbody>
        </table>
    </div>
    <div>
        <form action=" {{ url('admin/products/create') }}" method="GET">
            <button class="btn btn-primary" type="submit">Add new product</button>
        </form>
    </div>
@endsection
