<?php
  $id = "";
  $nombre = "";
  $direccion = "";
  if($op == "editar"){
      foreach ($sql->result() as $obj) {
        $op = "editar";
        $id = $obj->id;
        $nombre = $obj->nombre;
        $direccion = $obj->direccion; 
      }
    }
?>

<form role="form" action="<?php echo base_url(); ?>home/insertar" method="POST">
    <input type="hidden" name="op" value="<?php echo $op; ?>" class="form-control"  placeholder="ID">
    <input type="hidden" name="id" value="<?php echo $id; ?>" class="form-control"  placeholder="ID">
  <div class="form-group">
    <label>Nombre</label>
    <input type="text" name="nombre" value="<?php echo $nombre; ?>" class="form-control"  placeholder="Ingrese su Nombre">
    
  </div>
  <div class="form-group">
    <label class="glyphicon glyphicon-home"> Dirección</label>
    <input type="text"  name="direccion" value="<?php echo $direccion; ?>" class="form-control" placeholder="Ingrese su Dirección">
  </div>
  <button type="submit" class="btn btn-success"><span class="glyphicon glyphicon-floppy-disk"></span> Guardar</button>
</form>