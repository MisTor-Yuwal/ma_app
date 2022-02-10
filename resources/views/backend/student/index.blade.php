@extends('backend.app')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <a href="/student/create" class="btn btn-danger ">Add Student</a>
                    </div>
                    <div class="card-body">
                        <table class="table">
                            <tr>
                                <th>SN</th>
                                <th>Photo</th>
                                <th>Student Name</th>
                                <th>Address</th>
                                <th>Mobile</th>
                                <th>Faculty</th>
                                <th>Action</th>
                            </tr>

                            @foreach ($students as $item)
                                <tr>
                                    <td>{{ $item->id }}</td>
                                    <td><img src="{{ asset($item->photo) }}" width="100" alt=""></td>
                                    <td>{{ $item->name }}</td>
                                    <td>{{ $item->address }}</td>
                                    <td>{{ $item->mobile }}</td>
                                    <td>{{ $item->category->name }}</td>
                                    <td>
                                        <a href="/student/{{ $item->id }}/edit" class="badge btn-sm bg-dark">Edit</a>
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