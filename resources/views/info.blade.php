<?php
    session_start();
    $usuario = $_SESSION['usuario'];

    $participantes_nombre = [];
    $participantes = [];

    foreach ($competicion as $competicion) {
        if ($_REQUEST['id_comp'] ==  $competicion->id) {
            $nombre = $competicion->nombre;
            $fecha = $competicion->fecha;
            $id_reserva = $competicion->id_reserva;
            $participantes = unserialize($competicion->participantes);
            foreach ($reserva as $reserva) {
                if ($id_reserva == $reserva->id) {
                    $id_pista = $reserva->id_pista;
                    $hora = $reserva->hora;

                    foreach ($pista as $pista) {
                        if ($id_pista == $pista->id) {
                            $pista_nombre = $pista->nombre;
                        }
                    }
                }
                
            }
        }
    }



    foreach ($user as $user) {
        foreach ($participantes as $participante) {
            if ($user->id == $participante) {
                array_push($participantes_nombre, $user->nombre);
            }
        }
    }


?>
@extends('layouts/plantilla2')

@section('title', 'Login')
    
@section('contenido')
     <?php
        // echo $nombre . "<br>";
        // echo $fecha . "<br>";
        // echo $hora . "<br>";
        // echo $pista_nombre . "<br>";
        // var_dump($participantes_nombre);
     ?>

<div class="container">
    <h1 class="text-center">{{$nombre}}</h1>
    <div class="row">
      <div class="col-md-3"></div>
      <div class="col-md-3">
        <h2>Información</h2>
        <p>Fecha: {{$fecha}}</p>
        <p>Pista: {{$pista_nombre}}</p>
      </div>
      <div class="col-md-3">
        <h2>Participantes</h2>
        <ul>
            <?php
                foreach ($participantes_nombre as $p) {
                    echo "<li> $p </li>";
                }
            ?>
        </ul>
      </div>
      <div class="col-md-3"></div>
    </div>
  </div>


@endsection