@extends('backend.app')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <a href="/category/create" class="btn btn-danger ">Add Category</a>
                    </div>
                    <div class="card-body">
                        <table class="table">
                            <tr>
                                <th>SN</th>
                                <th>Category Name</th>
                                <th>Action</th>
                            </tr>
                            @foreach ($categories as $item)
                                <tr>
                                    <td>{{ $item->id }}</td>
                                    <td>{{ $item->name }}</td>
                                    <td>
                                        <a href="/category/{{ $item->id }}/edit" class="btn btn-secondary">Edit</a>
                                    </td>
                                </tr>
                            @endforeach
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection