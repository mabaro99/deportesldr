<?php

    session_start();

    use App\Models\Reserva;
    use App\Models\Competicion;

    $rpista = $_REQUEST['pista'];
    $rfecha = $_REQUEST['fecha'];
    $rhora = $_REQUEST['hora'];
    $idusu = $_SESSION['id'];


    if ($rpista == 1 || $rpista == 2 || $rpista == 3 || $rpista == 4) {
        $deporte="Futbol";
    } else {
        if ($rpista == 5) {
            $deporte="Baloncesto";
        } else {
            if ($rpista == 6) {
                $deporte="Tenis";
            } else {
                $deporte="Padel";
            }
        }
    }

    $reserva2 = new Reserva;
    $reserva2->fecha=$rfecha;
    $reserva2->hora=$rhora;
    $reserva2->id_usuario=$idusu;
    $reserva2->id_pista=$rpista;
    $reserva2->save();

    header("Location: crear2?nom_competicion=".$_REQUEST['nom_competicion']."&n_participantes=".$_REQUEST['n_participantes']."&pista=".$rpista."&fecha=".$rfecha."&hora=".$rhora."&deporte=".$deporte);
    die();

?>