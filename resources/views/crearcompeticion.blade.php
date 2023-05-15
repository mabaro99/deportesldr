<?php
    session_start();
    $usuario = $_SESSION['usuario'];
?>
@extends('layouts/plantilla2')

@section('title', 'DeportesLDR')

@section('contenido')
<script
src="https://code.jquery.com/jquery-3.6.4.js"
integrity="sha256-a9jBBRygX1Bh5lt8GZjXDzyOB+bWve9EiO7tROUtj/E="
crossorigin="anonymous"></script>
<script>
    window.addEventListener("DOMContentLoaded", (event) => {
      document.getElementById("fecha").addEventListener("change",()=>{
        let fecha = document.getElementById("fecha").value;
        let pista = document.getElementById("pista").value;
        console.log(pista);
        console.log(fecha);
        $.ajax({
          url: `horariocompeticion?fecha=+${fecha}&id_pista=+${pista}`,
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
        if (pista == 1 || pista == 2 || pista == 3 || pista == 4) {
            document.getElementById("deporte").value="Futbol";
        } else {
            if (pista == 5) {
                document.getElementById("deporte").value="Baloncesto";
            } else {
                if (pista == 6) {
                    document.getElementById("deporte").value="Tenis";
                } else {
                    document.getElementById("deporte").value="Padel";
                }
            }
        }
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
<div class="d-flex justify-content-center mt-5">
    <div class="card">
        <div class="card-body">
            <h1 class="text-center">Crear Competicion</h1>
            <form action="crear" method="get">
                <div class="row mb-3">
                <div class="col-md-6">
                    <label for="nom_competicion" class="form-label">Nombre Competicion:</label>
                    <input type="text" class="form-control" name="nom_competicion" id="nom_competicion" placeholder="Nombre competicion" required>
                </div>
                <div class="col-md-6">
                    <label for="n_participantes" class="form-label">Numero de Participantes:</label>
                    <input type="number" class="form-control" name="n_participantes" id="n_participantes" placeholder="Numero de participantes" required>
                </div>
                </div>
                <div class="row  mb-3">
                <div class="col-md-6">
                    <label for="pista" class="form-label">Pista:</label>
                    <select class="form-select" id="pista" name="pista" required>
                        <?php
                            foreach ($pista as $pista) {
                                echo '<option value="'.$pista->id.'">'.$pista->nombre.'</option>';
                            }
                        ?>
                    </select> 
                </div>
                <div class="col-md-6">
                    <label for="fecha" class="form-label">Fecha:</label>
                    <input type="date" class="form-control" id="fecha" name="fecha" required>
                </div>
                </div>
                <div class="row mb-3">
                    <div class="col-md-6">
                        <label for="hora" class="form-label">Hora:</label>
                        <select id="horario" class="form-select" id="hora" name="hora" required>
                          
                        </select>
                    </div>
                    <div class="col-md-6">
                        <label for="deporte" class="form-label">Deporte:</label>
                        {{-- <select class="form-select" id="deporte" name="deporte" required>
                            <option>Futbol</option>
                            <option>Baloncesto</option>
                            <option>Tenis</option>
                            <option>Padel</option>
                        </select>  --}}
                        <input type="text" class="form-control" id="deporte" name="deporte" disabled required>
                    </div>
                </div>
                
                <button type="submit" class="btn btn-primary btn-success">Crear</button>
            </form>
        </div>
    </div>
</div>

@endsection