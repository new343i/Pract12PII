@extends('plant')
@section('next')

@if(session()->has('confirm'))
    {!! "<script> Swal.fire('Listo', 'Tu solicitud llego al server', 'succes') </script>" !!}
    <div class="alert alert-success alert-dimissible fade show text-center" role="alert">
        <strong>{{session('confirm')}}</strong>
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
@endif

<div>
    <h1 class="mt-3 display-3 text-center">Login</h1>
</div>

@if($errors->any())
@foreach ($errors->all() as $error)
    <div class="alert alert-warning alert-dismissible fade show text-center" role="alert">
        <strong>Login Incompleto!</strong>{{$error}}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
@endforeach
@endif

<div class="container text-center w-50">
    <form action="requestUser" method="post" class="form">
        @csrf
        <p>
            <label name="user" class="form-label">Introduce nombre de usuario:</label>
            <input name="inuser" type="text" class="form-control" placeholder="Escribe tu nombre login..." value="{{old('inuser')}}">
            <p class="fv-bold text-danger">{{$errors->first('inuser')}}</p>
        </p>
        <p>
            <label name="pass" class="form-label">Introduce Contraseña:</label>
            <input name="inpass" type="password" class="form-control" placeholder="Escriba su contraseña..." value="{{old('inpass')}}">
            <p class="fv-bold text-danger">{{$errors->first('inpass')}}</p>
        </p>
        <p>
            <label name="feeling" class="form-label">Como estas hoy::</label>
            <select name="selfeel" class="form-select" aria-label="Default select example">
                <option selected>Predeterminado ._.</option>
                <option value="Feli">Feli UwU</option>
                <option value="nojado">Nojado >:c</option>
                <option value="Triste">Triste ;_;</option>
            </select>
        </p>
        <p class="block">
            <button name="btnSave" type="submit" class="btn btn-dark btn-lg btn-block mt-3">Login</button>
        </p>
    </form>
</div>
<br><br><br><br><br><br><br><br><br><br>
@stop
