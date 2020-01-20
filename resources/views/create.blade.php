@extends('layouts.main')
@section('content')

<!-- Default form register -->
<form class="text-center border border-light p-5" action="{{route('store')}}" method="POST">

{{ csrf_field() }}

    <p class="h4 mb-4">Alumno</p>

    <div class="form-row mb-4">
        <div class="col">
            <!-- First name -->
            <input type="text" id="defaultRegisterFormFirstName" name="nombre" class="form-control" placeholder="Nombre">
        </div>
        <div class="col">
            <!-- Last name -->
            <input type="text" id="defaultRegisterFormLastName" name="apellidos" class="form-control" placeholder="Apellidos">
        </div>
    </div>

    <!-- E-mail -->
    <input type="email" id="defaultRegisterFormEmail" name="email" class="form-control mb-4" placeholder="E-mail">

    <!-- Phone number -->
    <input type="text" id="defaultRegisterPhonePassword" name="telefono" class="form-control" placeholder="Teléfono" >

    <!-- Sign up button -->
    <button class="btn btn-info my-4 btn-block" type="submit">Añadir</button>

    

</form>
<!-- Default form register -->

@endsection