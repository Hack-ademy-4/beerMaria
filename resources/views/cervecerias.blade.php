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
<div class="container py-3 my-3">
    <div class="row  ">
        <!-- el foreach itera sobre cada elemento del array breweries y lo hace dinamico para que salga cada card con la info correspondiente-->
        @foreach ($cervecerias as $cerveceria)
        <div class="col-12 col-md-4 align-items-center justify-content-around mb-3">
        <div class="card border-0 shadow" style="width: 18rem;">
            <img src="https://picsum.photos/300/200" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">{{$cerveceria->name}}</h5>
              <p class="card-text">{{$cerveceria->description}}</p>
              <p class="card-text">{{$cerveceria->capacity}}</p>
              <a href="{{route('cervecerias.show',['id'=>$cerveceria->id])}}" class="btn btn-primary">Detalle</a>
            </div>
        </div>
        </div>
        @endforeach
    </div>


</div>
@endsection
