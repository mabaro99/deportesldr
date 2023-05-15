<?php
    session_start();
    $usuario = $_SESSION['usuario'];
?>
@extends('layouts/plantilla2')

@section('title', 'Competiciones')
    
@section('contenido')
  <div class="container p-3 border">
    <form action="crearcompeticion" method="get">
        <div class="mb-3 d-flex justify-content-start">
          <button class="btn btn-primary btn-success" type="submit">Crear Competicion</button>
        </div>
      {{$competicion->links()}}
    </form>
    
		<div class="text-center">
			<div class="row row-cols-1 row-cols-md-3 g-4 mx-5">
        <?php
        foreach($competicion as $competicion) {
          if ($competicion->participantes == "0") {
            $participantes = 0;
            } else {
              $participantes = unserialize($competicion->participantes);
              $participantes = count($participantes);
            }
          ?>
          
            <div>
              <div class="card ">
                <div class="card-header"><form action="info" method="get"><button class="btn btn-link text-success fw-bold" type="submit" name="id_comp" value={{ $competicion->id }}>{{ $competicion->nombre }}</button></form></div>
                <form action="apuntarse" method="get">
                <div class="card-body border relative d-flex justify-content-around ">
                    <div class="col-4">{{ $competicion->deporte }}</div>
                    <div class="col-4">{{ $competicion->fecha }}</div>
                    <div class="col-4"><?php echo $participantes?>/{{ $competicion->n_participantes }}</div>
                </div>
                <input name="id_competicion" type="hidden" value="<?php echo $competicion->id ?>"/>
                <div class="card-footer">
                  <?php
                  if ($participantes == $competicion->n_participantes) {
                    ?><button class="btn btn-primary btn-success" type="submit" disabled>Apuntarse</button><?php
                  } else {
                    ?><button class="btn btn-primary btn-success" type="submit">Apuntarse</button><?php
                  }
                  ?>
                  
                </div>
              </div>
              
            </div>
            
          </form>
        <?php
        }
        ?>
        
      </div>
		</div>
    
	</div>     
@endsection