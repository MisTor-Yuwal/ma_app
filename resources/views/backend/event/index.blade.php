@extends('backend.app')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <a href="/event/create" class="btn btn-danger ">Add Event</a>
                    </div>
                    <div class="card-body">
                        <table class="table">
                            <tr>
                                <th>SN</th>
                                <th>Photo</th>
                                <th>Event</th>
                                <th>Address</th>
                                <th>ticket price</th>
                                <th>Date</th>
                                <th>Time</th>
                                <th>Action</th>
                            </tr>

                            @foreach ($events as $item)
                                <tr>
                                    <td>{{ $item->id }}</td>
                                    <td><img src="{{ asset($item->photo) }}" width="100" alt=""></td>
                                    <td>{{ $item->name }}</td>
                                    <td>{{ $item->address }}</td>
                                    <td>{{ $item->ticket_price }}</td>
                                    <td>{{ $item->date }}</td>
                                    <td>{{ $item->time }}</td>
                                    <td>
                                        <a href="/event/{{ $item->id }}/edit" class="badge btn-sm bg-dark">Edit</a>
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