@extends('app')
@section('content')

<!--header -->
<header>
  <div class="container-fluid h-100">
    <div class=" row d-flex h-100 text-center align-items-center">
      <div class=" col-12 w-100 caja-rotulo">
        <h1 class="rotulo">Bebete Valéncia</h1>
        <p class="lead mb-0 text-dark fs-2">Encuentra las mejores cervecerias de la ciudad</p>
      </div>
    </div>
  </div>
</header>

<section class="my-5">
  <div class="container">
    <div class="row">
      <div class="col-md-8 mx-auto">
        <p>The HTML5 video element uses an mp4 video as a source. Change the source video to add in your own background! The header text is vertically centered using flex utilities that are build into Bootstrap 4.</p>
        <p>The overlay color can be changed by changing the <code>background-color</code> of the <code>.overlay</code> class in the CSS.</p>
        <p>Set the mobile fallback image in the CSS by changing the background image of the header element within the media query at the bottom of the CSS snippet.</p>
        <p class="mb-0">
         
        </p>
      </div>
    </div>
  </div>
</section>
<!-- section cards -->
<!-- titulo -->
<div class="container">
    <div class="row w-100">
        <div class="col-12 text-center bg-warning">
            <h2>Locales cerveceros más valorados</h2>
       
        </div>
    </div>

</div>
<!-- cads -->
<div class="container-fluid">
    <div class="row py-5 ">
        <!-- el foreach itera sobre cada elemento del array breweries y lo hace dinamico para que salga cada card con la info correspondiente-->
        @foreach ($cervecerias as $cerveceria)
        <div class="col-12 col-md-6 align-items-center justify-content-center">
            <div class="card mx-auto py-3" style="width: 1000px">
                <img src="/media/theMarketCerveza.jpeg" class="card-img-top" alt="...">
            
                <div class="card-body">
                <!--la $cerveceria['nombre'] me da el nombre de cada card que esta en la array-->      
                <!--la $loop->iteration me da el numero de cada card que esta en la array--> 
                    <h5 class="card-title ">#{{$loop->iteration}} {{$cerveceria['nombre']}}</h5> 
            <!--  descricion llave $cerveceria valor desc-->
                    <p class="card-text">{{$cerveceria['description']}}</p>
            <!--  aforo -->      
                    <p class="card-text">Aforo {{$cerveceria['capacity']}} personas</p>
                    <!-- enlace para el detalle de la ruta y el loop me da la posicion de cada una y enlaza la card con su pagina de detalle-->
                    <a href="{{route('detalle',['indice'=>$loop->index])}}" class="btn btn-primary">más info</a>
                </div>
            </div>

        </div>
        @endforeach
    </div>


</div>
@endsection
