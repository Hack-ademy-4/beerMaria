@extends('app')
@section('content')
<div class="row">
    <div class="col-12 col-md-6 offset-md-3">  
        
          <h1>About Us</h1>
         
    </div>
 </div>
 <div class="row">
    @foreach ($team as $person)
    <div class="col-12 col-md-3">
        <div class="card" style="width: 18rem;">
            <img src="./media/images2.jpeg" class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title @if($loop->first)text-danger @endif">Cerveceria Ruzafa</h5>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                <a href="#" class="btn btn-primary">más info</a>
            </div>
        </div>

    </div>
    @endforeach


</div>
  

 </div>
 


@endsection

