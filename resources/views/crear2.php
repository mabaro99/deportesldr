<?php

    session_start();

    use App\Models\Competicion;

    $rpista = $_REQUEST['pista'];
    $rfecha = $_REQUEST['fecha'];
    $rhora = $_REQUEST['hora'];
    $idusu = $_SESSION['id'];

    foreach ($reserva as $reserva) {
        $id = $reserva->id;
        if ($reserva->fecha == $rfecha && $reserva->hora == $rhora && $reserva->id_usuario == $idusu && $reserva->id_pista == $rpista) {
            $competicion_id_reserva = $id;
        }  
    }

    $nueva_competicion = new Competicion();
    $nueva_competicion->nombre = $_REQUEST['nom_competicion'];
    $nueva_competicion->fecha = $_REQUEST['fecha'];
    $nueva_competicion->deporte = $_REQUEST['deporte'];
    $nueva_competicion->n_participantes = $_REQUEST['n_participantes'];
    $nueva_competicion->participantes = 0;
    $nueva_competicion->id_reserva = $id;
    $nueva_competicion->save();

    header("Location: principal");
    die();

?>