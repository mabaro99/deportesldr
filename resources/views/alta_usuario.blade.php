@extends('layouts/plantilla')

@section('title', 'Crear usuario')

@section('contenido')
<div class="vh-100 d-flex justify-content-center align-items-center">
    <div class="col-md-4 p-5 shadow-sm border rounded-3">
        <h2 class="text-center mb-4 text-success">Crear Usuario</h2>
        <form action="alta" method="get">
            <div class="form-floating mb-3 mt-3">
                <input type="text" class="form-control" id="username" placeholder="Intoducir nombre de usuario" name="username" required>
                <label for="username">Nombre de Usuario</label>
            </div>
            <div class="form-floating mb-3 mt-3">
                <input type="text" class="form-control" id="nombre" placeholder="Intoducir nombre" name="nombre" required pattern="^[A-Za-zÁÉÍÓÚÑáéíóúñ\s]{1,50}$">
                <label for="nombre">Nombre</label>
            </div>
            <div class="form-floating mb-3 mt-3">
                <input type="text" class="form-control" id="apellidos" placeholder="Intoducir apellidos" name="apellidos" required pattern="^[A-Za-zÁÉÍÓÚÑáéíóúñ\s]{1,50}$">
                <label for="apellidos">Apellidos</label>
            </div>
            <div class="form-floating mb-3 mt-3">
                <input type="text" class="form-control" id="email" placeholder="Intoducir email" name="email" required pattern="^[A-Za-z0-9._%+-]+@[A-Za-z0-9.-]+\.[A-Za-z]{2,}$">
                <label for="email">Correo Electronico</label>
            </div>
            <div class="form-floating mb-3 mt-3">
                <input type="password" class="form-control" id="password" placeholder="Intoducir contraseña" name="password" required>
                <label for="password">Contraseña</label>
            </div>
            <div class="d-grid">
                <button class="btn btn-success" type="submit">Crear Usuario</button>
            </div>
        </form>
@endsection