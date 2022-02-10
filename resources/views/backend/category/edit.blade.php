@extends('backend.app')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <a href="/category" class="btn btn-dark">Back</a>
                    </div>
                    <div class="card-body">
                        <form action="/category/{{ $category->id }}" method="post">
                        @csrf
                        @method('put')
                        <div class="form-group">
                            <label for="name">Category Name</label>
                            <input id="name" class="form-control" type="text" name="name" value="{{ $category->name }}">
                        </div>
                        @error('name')
                            <p class="text-danger">{{ $message }}</p>
                        @enderror
                        <button type="submit" class="btn btn-success float-right">Record</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection