@extends('backend.app')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <a href="/event" class="btn btn-dark">Back</a>
                    </div>
                    <div class="card-body">
                        <form action="/event/{{ $events->id }}" method="post" enctype="multipart/form-data">
                        @csrf
                        @method('put')
                        <div class="form-group">
                            <label for="name">Event</label>
                            <input id="name" class="form-control" type="text" name="name" value="{{ $events->name }}">
                        </div>
                        <div class="form-group">
                            <label for="address">Address</label>
                            <input id="address" class="form-control" type="text" name="address" value="{{ $events->address }}">
                        </div>
                        <div class="form-group">
                            <label for="ticket_price">Ticket Price</label>
                            <input id="ticket_price" class="form-control" type="text" name="ticket_price" value="{{ old('ticket_price') }}">
                        </div>
                        <div class="form-group">
                            <label for="photo">Insert Your Photo</label>
                            <input id="photo" class="form-control-file" type="file" name="photo" accept="image/*" value="{{ old('image') }}">
                        </div>
                        @error('photo')
                            <p class="text-danger">{{ $message }}</p>
                        @enderror
                        <div class="form-group">
                            <label for="date">Date</label>
                            <input id="date" class="form-control" type="date" name="date" value="{{ old('date') }}">
                        </div>
                        <div class="form-group">
                            <label for="time">Time</label>
                            <input id="time" class="form-control" type="time" name="time" value="{{ old('time') }}">
                        </div>
                        <div>
                            <img src="{{ asset($events->photo) }}" width="120" alt="">
                        </div>
                        <button type="submit" class="btn btn-success float-right">submit</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection