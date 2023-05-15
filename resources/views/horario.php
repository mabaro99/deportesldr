<?php
function buscarHora($fecha, $id_pista){
  $server="localhost";
 $usuario="root";
 $clave="";
 $base="laravel";
    $conn = new PDO("mysql:dbname=$base;host=$server", "$usuario","$clave", array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"));
    
      $stmt = $conn->prepare("SELECT hora FROM reserva WHERE fecha=? and id_pista=?");
      $stmt->bindParam(1, $fecha);
      $stmt->bindParam(2, $id_pista);
      $stmt->execute();

      $datos = $stmt -> fetchAll(PDO::FETCH_OBJ);


      $horas = array(
        "16:00-17:00",
        "17:00-18:00",
        "18:00-19:00",
        "19:00-20:00"
    );

    $hora_consulta = array();
    $resultado = array();

    if ($stmt->rowCount() > 0) {
        foreach ($datos as $result) {
            $hora = $result->hora;
            $hora_consulta[] = $hora;
        }
        for ($i=0; $i < count($horas); $i++) { 
          for ($j=0; $j < count($hora_consulta); $j++) { 
            if ($horas[$i] == $hora_consulta[$j]) {
              
            } else {
              if (!in_array($horas[$i], $resultado) && !in_array($horas[$i], $hora_consulta)) {
                $resultado[] = $horas[$i];
              }
            }
          }
        }
        foreach ($resultado as $hora) {
          echo "<option>$hora</option>";
      }
    } else {
        foreach ($horas as $hora) {
            echo "<option>$hora</option>";
        }
    }
 
    }
      
    $fecha=$_GET['fecha'];
    $id_pista=$_GET['id_pista'];
    $hora=buscarHora($fecha, $id_pista);
?>