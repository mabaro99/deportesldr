<?php
    session_start();

    use App\Models\Reserva;

    $rpista = $_REQUEST['pista'];
    $rfecha = $_REQUEST['fecha'];
    $rhora = $_REQUEST['hora'];
    $idusu = $_SESSION['id'];

    foreach($pista as $pista) {
        if ($pista->id == $rpista) {
            $idpista = $pista->id;
        }
    }

    $reserva = new Reserva;
    $reserva->fecha=$rfecha;
    $reserva->hora=$rhora;
    $reserva->id_usuario=$idusu;
    $reserva->id_pista=$idpista;
    $reserva->save();

    header("Location: principal");
    die();

?>
