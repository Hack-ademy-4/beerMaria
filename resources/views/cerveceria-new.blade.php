@extends('app')
@section('content')


<div class="container my-5 py-5">
    <div class="row">
        <div class="col-lg-8 mt-5 mt-lg-0">
            <h1 class="rotulo">Formulario para las cervecerias</h1>
            <form action="{{route("cervecerias.store")}}" method="post" role="form" class="php-email-form">
            @csrf  
                <div class="row">
                    <div class="col-md-6 form-group">
                    <input type="text" name="name" class="form-control" id="name" placeholder="Nombre de la cerveceria" required value="{{old('name')}}">
                    @error('name')
                        <div class="alert alert-danger">{{$message}}</div>
                    @enderror   
                    </div>
                    <div class="col-md-6 form-group mt-3 mt-md-0">
                    <input type="number" class="form-control" name="capacity" id="capacity" placeholder="Capacidad" value="{{old('capacity')}}" required>
                    @error('capacity')
                        <div class="alert alert-danger">{{$message}}</div>
                    @enderror   
                    </div>
                </div>
                <div class="form-group mt-3">
                    <textarea class="form-control" name="description" rows="5" placeholder="Descripcion"  required>{{old('description')}}</textarea>
                    @error('description')
                        <div class="alert alert-danger">{{$message}}</div>
                    @enderror   
                </div>
                <div class="my-3">
                    <div class="loading">Rellena todos los campos</div>
                    <div class="error-message"></div>
                    <div class="sent-message">Crea y elimina cervecerias</div>
                </div>
                <div class="text-center  btn m x-3 "><button type="submit">Añadir</button></div>
                <div class="text-center  btn m x-3"><button type="submit">Eliminar</button></div>
            </form>

        </div>
        
        
        
    </div>
</div>
@endsection

