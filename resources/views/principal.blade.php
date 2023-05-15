<?php
    session_start();
?>
<script
src="https://code.jquery.com/jquery-3.6.4.js"
integrity="sha256-a9jBBRygX1Bh5lt8GZjXDzyOB+bWve9EiO7tROUtj/E="
crossorigin="anonymous"></script>
@extends('layouts/plantilla2')

@section('title', 'Reserva')

@section('contenido')
  <script>
    window.addEventListener("DOMContentLoaded", (event) => {
      document.getElementById("fecha").addEventListener("change",()=>{
        let fecha = document.getElementById("fecha").value;
        let pista = document.getElementById("pista").value;
        console.log(pista);
        console.log(fecha);
        $.ajax({
          url: `horario?fecha=+${fecha}&id_pista=+${pista}`,
          dataType:'json',
          error: function(XMLHttpRequest,textStatus,errorThrown) {
            document.getElementById("horario").innerHTML=XMLHttpRequest.responseText;
          }
        })
        .done(function(data) { 
          console.log(data);
        });
      });
      document.getElementById("pista").addEventListener("change",()=>{
        let fecha = document.getElementById("fecha").value;
        let pista = document.getElementById("pista").value;
        console.log(pista);
        console.log(fecha);
        $.ajax({
          url: `horario?fecha=+${fecha}&id_pista=+${pista}`,
          dataType:'json',
          error: function(XMLHttpRequest,textStatus,errorThrown) {
            document.getElementById("horario").innerHTML=XMLHttpRequest.responseText;
          }
        })
        .done(function(data) { 
          console.log(data);
        });
      });
    });
  </script>
    <?php

        if (isset($_SESSION['usuario'])) {
            $usuario = $_SESSION['usuario'];
            $password = $_SESSION['password'];
        } else {
            $usuario = $_REQUEST['usuario'];
            $password = $_REQUEST['password'];
        }
        $encontrado=true;

    foreach ($user as $user) {
        if ($usuario == $user->username && $password == $user->password) {
            $_SESSION['usuario'] = $usuario;
            $_SESSION['password'] = $password;
            $_SESSION['id'] = $user->id;
            $encontrado = false;
            if ($usuario == "admin") {
              header("Location: admin");
              die();
            }
        }
    }
    if($encontrado == TRUE) {
            echo "Usuario/Contraseña Incorrecto";
            ?>
            <a href="/">Volver a inicio</a>
            <?php
    } else {
    ?>
        <div class="container mt-3">
            <div class="row">
                <div class="col-md-6">
                    <img src="{{ asset('img/mapa(1).png') }}" alt="Mapa del recinto" width="575">
                </div>
                <div class="col-md-6">
                <div class="card">
                  <div class="card-body">
                    <form action="reserva" method="get">
                      <div class="mb-3">
                        <label for="nombre" class="form-label">Pista:</label>
                        <select class="form-select" id="pista" name="pista" required>
                            <?php
                                foreach ($pista as $pista) {
                                    echo '<option value="'.$pista->id.'">'.$pista->nombre.'</option>';
                                }
                            ?>
                        </select> 
                      </div>
                      <div class="mb-3">
                        <label for="fecha" class="form-label">Fecha:</label>
                        <input type="date" class="form-control" id="fecha" name="fecha" required>
                      </div>
                      <div class="mb-3">
                        <label for="hora" class="form-label">Hora:</label>
                        <select id="horario" class="form-select" id="hora" name="hora" required>
                          
                        </select> 
                      </div >
                      <button type="submit" class="btn btn-success btn-block">Reservar</button>
                    </form>
                  </div>
                </div>
              </div>
            </div>
          </div>

    <?php
    }
    ?>

@endsection