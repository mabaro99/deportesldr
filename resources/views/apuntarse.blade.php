<?php
    use App\Models\Competicion;

    session_start();
    $usuario = $_SESSION['usuario'];
    $id_comp = $_REQUEST['id_competicion'];

    $participantes = [];

    foreach ($competicion as $competicion) {
        if ($competicion->id == $id_comp) {
            if ($competicion->participantes != "0") {
                $participantes = unserialize($competicion->participantes);
            }
        }
    }

    foreach ($user as $user) {
        if ($user->username == $usuario) {
            $id_usuario = $user->id;
            array_push($participantes, $id_usuario);
        }
    }

    $serializado = serialize($participantes);

    Competicion::where('id', $id_comp)->update(['participantes' => $serializado]);

    header("Location: competiciones");
    die();
?>