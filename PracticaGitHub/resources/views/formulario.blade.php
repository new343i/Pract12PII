@extends('plant')
@section('next')
<div>
    <h1 class="mt-3 display-3 text-center">Login</h1>
</div>

<div class="container text-center w-25">
    <form action="requestUser" method="post" class="form">
        <p>
            <label name="user" class="form-label">Introduce nombre de usuario:</label>
            <input name="inuser" type="text" class="form-input" placeholder="Escribe tu nombre login...">
        </p>
        <p>
            <label name="pass" class="form-label">Introduce Contraseña:</label>
            <input name="inpass" type="password" class="form-input" placeholder="Escriba su contraseña...">
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
<br><br><br><br><br><br><br><br><br><br><br>
@stop
