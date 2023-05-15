<?php
    session_start();
?>
@extends('layouts/plantilla')

@section('title', 'DeportesLDR')
    
@section('contenido')
<script>
    function getCookie(cname) {
    let name = cname + "=";
    let decodedCookie = decodeURIComponent(document.cookie);
    let ca = decodedCookie.split(';');
    for(let i = 0; i <ca.length; i++) {
        let c = ca[i];
        while (c.charAt(0) == ' ') {
        c = c.substring(1);
        }
        if (c.indexOf(name) == 0) {
        return c.substring(name.length, c.length);
        }
    }
    return "";
    }

    function setCookie(cname, cvalue, exdays) {
        const d = new Date();
        d.setTime(d.getTime() + (exdays*24*60*60*1000));
        let expires = "expires="+ d.toUTCString();
        document.cookie = cname + "=" + cvalue + ";" + expires + ";path=/";
    }

    window.onload = function() {
        // if (localStorage.getItem('cookies_accepted') !== 'true') {
        if (getCookie("cookies_accepted") !== 'true') {
            document.getElementById('cookie-accept').style.display = 'block';
            document.getElementById('usuario').disabled=true;
            document.getElementById('password').disabled=true;
            document.getElementById('sesion').disabled=true;
        }
    };

    function acceptCookies() {
        // localStorage.setItem('cookies_accepted', 'true');
        setCookie("cookies_accepted", "true", 1);
        document.getElementById('cookie-accept').style.display = 'none';
        document.getElementById('usuario').disabled=false;
        document.getElementById('password').disabled=false;
        document.getElementById('sesion').disabled=false;
    }
</script>

<div class="vh-100 d-flex justify-content-center align-items-center">
    <div class="col-md-4 p-5 shadow-sm border rounded-3">
        <h2 class="text-center mb-4 text-success">Iniciar Sesion</h2>
        <form action="principal" method="get">
            <div class="form-floating mb-3 mt-3">
                <input type="text" class="form-control" id="usuario" placeholder="Intoducir nombre de usuario o email" name="usuario" required>
                <label for="usuario">Nombre de Usuario</label>
            </div>
            <div class="form-floating mb-3 mt-3">
                <input type="password" class="form-control" id="password" placeholder="Intoducir contraseña" name="password" required>
                <label for="password">Contraseña</label>
            </div>
            {{-- <p class="small"><a class="text-primary" href="forget-password.html">Forgot password?</a></p> --}}
            <div class="d-grid">
                <button class="btn btn-success" type="submit" id="sesion">Iniciar Sesion</button>
            </div>
        </form>
        <div class="mt-3">
            <p class="mb-0  text-center">¿No tienes cuenta? 
              <a href="alta_usuario.blade.php" class="text-success fw-bold">Crear cuenta</a>
            </p>
        </div>
    </div>
  </div>

 

@endsection
<footer class="text-light py-1 fixed-bottom">
    <div class="cookie-accept" id="cookie-accept" style="display: none;">
        <div class="alert alert-info alert-dismissible fade show mb-0" role="alert">
            Este sitio utiliza cookies. Al continuar navegando en este sitio, aceptas nuestro uso de cookies.
            {{-- <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button> --}}
            <button type="button" class="btn btn-sm btn-success ms-2" onclick="acceptCookies()">Aceptar</button>
        </div>
    </div>
  </footer>