@extends('frontend.app')
@section('content')
    <div class="container">
        <div class="row">
            @foreach ($events as $item)
                <div class="col-md-3">
                    <div class="card">
                        <img src="{{ asset($item->photo) }}" class="card-img-top" alt="">
                    </div>
                    <div class="card-body">
                        <h5 class="card-title">{!! Str::Limit( $item->name ) !!}</h5>
                        <p>{!! $item->address !!}</p>
                        <p>{!! $item->ticket_price !!}</p>
                        <p>{!! $item->date !!}</p>
                        <p>{!! $item->time !!}</p>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection