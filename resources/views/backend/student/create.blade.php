@extends('backend.app')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <a href="/student" class="btn btn-dark">Back</a>
                    </div>
                    <div class="card-body">
                        <form action="/student" method="post" enctype="multipart/form-data" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <label for="name">Student Name</label>
                            <input id="name" class="form-control" type="text" name="name" required value="{{ old('name') }}">
                        </div>
                        <div class="form-group">
                            <label for="address">Address</label>
                            <input id="address" class="form-control" type="text" name="address" required value="{{ old('address') }}">
                        </div>
                        <div class="form-group">
                            <label for="mobile">Mobile</label>
                            <input id="mobile" class="form-control" type="text" name="mobile" value="{{ old('mobile') }}">
                        </div>
                        <div class="form-group">
                            <label for="photo">Insert Your Photo</label>
                            <input id="photo" class="form-control-file" type="file" name="photo" accept="image/*" value="{{ old('image') }}">
                        </div>
                        @error('photo')
                            <p class="text-danger">{{ $message }}</p>
                        @enderror
                        <div class="form-group">
                            <label for="category_id">Faculty</label>
                            <select id="category_id" class="form-control" name="category_id" required>
                                @foreach ($faculties as $item)
                                    <option value="{{ $item->id }}">{{ $item->name }}</option>
                                @endforeach
                            </select>
                        </div>
                        @error('name')
                            <p class="text-danger">{{ $message }}</p>
                        @enderror
                        <button type="submit" class="btn btn-success float-right">Proceed</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection