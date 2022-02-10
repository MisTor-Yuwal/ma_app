@extends('frontend.app')
@section('content')
    <div class="container">
        {{-- <div class="box" style="height: 50vh">
            <img src="{{ asset('/logo/lolo.jpg') }}" alt="">
        </div> --}}
        <div class="row">
            @foreach ($jades as $item)
            <div class="col-md-3">
                <div class="card">
                    <img src="{{ asset($item->photo) }}" class="card-img-top" alt="...">
                    <div class="card-body">
                      <h4 class="card-title">{!! Str::Limit( $item->name,15) !!}</h4>
                      <p class="card-text">{!! Str::Limit( $item->description,250 ) !!}</p>
                      <a href="/show/{{ $item->id }}" class="btn btn-primary">LEARN MORE</a>
                    </div>
                  </div>
            </div>
            @endforeach
        </div>
    </div>
@endsection