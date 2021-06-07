@extends('app')
@section('content')
<div class="row">
    @foreach ($breweries as $brewery)
    <div class="col-12 col-md-3 align-items-center justify-content-center ">
        <div class="card" style="">
            <img src="" class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title @if($loop->first)tex-warning @endif">{{$brewery['nombre']}}</h5>
                <p class="card-text">{{$brewery['desc']}}</p>
                <p class="card-text">aforo{{$brewery['aforo']}}personas</p>
                <a href="#" class="btn btn-primary">más info</a>
            </div>
        </div>

    </div>
    @endforeach


</div>

@endsection