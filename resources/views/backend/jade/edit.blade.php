@extends('backend.app')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <a href="/jade" class="btn btn-dark">Back</a>
                    </div>
                    <div class="card-body">
                        <form action="/jade/{{ $jades->id }}" method="post" enctype="multipart/form-data">
                        @csrf
                        @method('put')
                        <div class="form-group">
                            <label for="name"> Name</label>
                            <input id="name" class="form-control" type="text" name="name" value="{{ $jades->name }}">
                        </div>
                        <div class="form-group">
                            <label for="address">Address</label>
                            <input id="address" class="form-control" type="text" name="address" value="{{ $jades->address }}">
                        </div>
                        <div class="form-group">
                            <label for="description">Description *</label>
                            <textarea id="description" class="form-control" name="description" rows="3">{{ $jades->description }}</textarea>
                        </div>
                        <div class="form-group">
                            <label for="photo">Insert Your Photo</label>
                            <input id="photo" class="form-control-file" type="file" name="photo" accept="image/*">
                        </div>
                        <div>
                            <img src="{{ asset($jades->photo) }}" width="120" alt="">
                        </div>
                        <div class="form-group">
                            <label for="category_id">Category</label>
                            <select id="category_id" class="form-control" name="category_id">
                                @foreach ($categories as $item)
                                    <option value="{{ $item->id }}" {{ $item->id == $jades->category_id ? 'selected' : ' ' }}>{{ $item->name }}</option>
                                @endforeach
                            </select>
                        </div>
                        <button type="submit" class="btn btn-success float-right">submit</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection