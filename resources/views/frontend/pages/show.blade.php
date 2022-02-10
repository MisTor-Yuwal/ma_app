@extends('frontend.app')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8">
                <img src="{{ asset($item->photo) }}" class="img-fluid" alt="">
                <div>
                    <p>Views: {{ $item->views }}</p>
                </div>
                {!! $item->description !!}
            </div>
            <div class="col-md-4">
                @foreach ($similar as $milap)
                    <a href="/show/{{ $milap->id }}"><img src="{{ asset($milap->photo) }}" class="img-fluid" alt=""></a>
                    <h4>{!! $milap->name !!}</h4>
                @endforeach
            </div>
        </div>
    </div>
@endsection