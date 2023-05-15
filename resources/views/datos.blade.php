<?php
    session_start();
    $usuario = $_SESSION['usuario'];

    // {{ $user->email }}

    foreach ($user as $user) {
        if ($_SESSION['id'] ==  $user->id) {
            $username = $user->username;
            $nombre = $user->nombre;
            $apellidos = $user->apellido;
            $email = $user->email;
        }
    }
?>
@extends('layouts/plantilla2')

@section('title', 'Datos Usuario')

@section('contenido')
<div class="d-flex justify-content-center mt-3">
    
    <div class="card">
        
    <div class="card-body">
        <h1 class="">Datos de usuario</h1>
    <form>
        <div class="mb-3">
            <label for="email" class="form-label">Nombre de usuario:</label>
            <input type="email" class="form-control" name="email" id="email" value="{{ $username }}" disabled>
        </div>
        <div class="mb-3">
            <label for="name" class="form-label">Nombre:</label>
            <input type="text" class="form-control" name="name" id="name" value="{{ $nombre }}" disabled>
        </div>
        <div class="mb-3">
            <label for="email" class="form-label">Apellidos:</label>
            <input type="email" class="form-control" name="email" id="email" value="{{ $apellidos }}" disabled>
        </div>
        <div class="mb-3">
            <label for="email" class="form-label">Email:</label>
            <input type="email" class="form-control" name="email" id="email" value="{{ $email }}" disabled>
        </div>
    </form>
</div>
</div>
</div>

@endsection