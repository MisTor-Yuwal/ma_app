@extends('frontend.app')
@section('content')
    <div class="container">
        <div class="row">
              @foreach ($jades as $item)
                  <div class="col-md-3">
                    <div class="card">
                        <img src="{{ asset($item->photo) }}" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">{!! Str::Limit( $item->name,15 ) !!}</h5>
                            <p class="card-text">{!! Str::Limit( $item->description,250 ) !!}</p>
                            <a href="/show/{{ $item->id }}" class="btn btn-primary">Show Details</a>
                        </div>
                    </div>
                  </div>
              @endforeach
        </div>
    </div>
@endsection