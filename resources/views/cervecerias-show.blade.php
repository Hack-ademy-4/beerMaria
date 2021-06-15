@extends('app')
@section('content')
<div class="container-fluid my-5 py-5">

        <div class="section-title">
            <h2>Check our<span>Beers</span></h2>
        </div>



  <!--card detelle de la cerveceria-->
        <div class="row vh-100">
       
        <div class="col-12 col-md-6 d-flex justify-content-center align-items center" >
       
            <div class="card w-100 py-5" style="">
                    <img src="/media/theMarketCerveza.jpeg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">{{$cerveceria->name}}</h5>
                        <p class="card-text">{{$cerveceria->description}}</p>
                        <p class="card-text">Aforo{{$cerveceria->capacity}}personas</p>
                        <a href="#" class="btn ">Más info</a>
                    </div>
                </div>
        </div>
        
      </div>
</div>
@endsection


        
