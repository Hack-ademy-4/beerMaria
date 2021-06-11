@extends('app')
@section('content')
<div class="container-fluid my-5 py-5">

        <div class="section-title">
            <h2>Check our<span>Beers</span></h2>
        </div>



  <!--card detelle de la cerveceria-->
        <div class="row vh-100">
        @foreach
        <div class="col-12 col-md-6 d-flex justify-content-center align-items center" >
       
            <div class="card w-100 py-5" style="">
                    <img src="/media/theMarketCerveza.jpeg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">{{$cerveceria['nombre']}}</h5>
                        <p class="card-text">{{$cerveceria['desc']}}</p>
                        <p class="card-text">Aforo{{$cerveceria['aforo']}}personas</p>
                        <a href="#" class="btn ">más info</a>
                    </div>
                </div>
        </div>
        @endforeach

      </div>
</div>


@endsection


        

     <!--    <div class="row justify-content-evenly">
            @foreach($lots as $lot)
            <div class="col-12 col-md-6 mb-5">

                <div class="member">
                    <div class="pic"><img src="/img/slide/slide-4.jpg" class="img-fluid shadow rounded-3" alt=""></div>
                    <div class="member-info">
             -->