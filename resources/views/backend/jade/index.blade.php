@extends('backend.app')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <a href="/jade/create" class="btn btn-danger ">Add activities</a>
                    </div>
                    <div class="card-body">
                        <table class="table">
                            <tr>
                                <th>SN</th>
                                <th>Photo</th>
                                <th>Name</th>
                                <th>Category</th>
                                <th>Views</th>
                                <th>Address</th>
                                <th>Action</th>
                            </tr>   

                            @foreach ($jades as $index=>$item)
                                <tr>
                                    <td>{{ ++$index }}</td>
                                    <td><img src="{{ asset($item->photo) }}" width="100" alt=""></td>
                                    <td>{{ $item->name }}</td>
                                    <td>{{ $item->category->name }}</td>
                                    <td>{{ $item->views }}</td>
                                    <td>{{ $item->address }}</td>
                                    <td>
                                        <a href="/jade/{{ $item->id }}/edit" class="badge btn-sm bg-dark">Edit</a>
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