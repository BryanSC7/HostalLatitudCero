<?php
  $IdHabitacion = "";
  $Numero = "";
  $Piso = "";
  $Descripcion = "";
  $Caracteristicas = "";
  $Precio = "";
  $TipoHabitacion = "";
  $Estado = "";
  if($op == "editar"){
      foreach ($sql2->result() as $obj1) {
        $op = "editar";
        $IdHabitacion = $obj1->IdHabitacion;
        $Numero = $obj1->Numero;
        $Piso = $obj1->Piso;
        $Descripcion = $obj1->Descripcion;
        $Caracteristicas = $obj1->Caracteristicas;
        $Precio = $obj1->Precio;
        $TipoHabitacion = $obj1->TipoHabitacion;
        $Estado = $obj1->Estado;
      }
    }
?>
<?php echo validation_errors(); ?>
<form role="form" action="<?php echo base_url(); ?>Habitaciones/insertar" method="POST">
    <input type="hidden" name="op" value="<?php echo $op; ?>" class="form-control"  placeholder="ID">
    <input type="hidden" name="IdHabitacion" value="<?php echo $IdHabitacion; ?>" class="form-control"  placeholder="ID">
  <div class="form-group">
    <input type="text" name="Numero" value="<?php echo $Numero; ?>" class="form-control"  placeholder="Ingrese número de habitación">
  </div>
  <div class="form-group">
    <label>Seleccione el piso</label>
    <select class="form-control" name="Piso" value="<?php echo $Piso; ?>">
  <option >1</option>
  <option >2</option>
  <option>3</option>
  <option>4</option>
  <option>5</option>
</select>
  </div>
  <div class="form-group">
    <textarea class="form-control" rows="3" name="Descripcion" value="<?php echo $Descripcion; ?>" placeholder="Descripción"></textarea>
  </div>
  <div class="form-group">
    <textarea class="form-control" rows="3" name="Caracteristicas" value="<?php echo $Caracteristicas; ?>" placeholder="Caracteristicas"></textarea>
  </div>
  <div class="form-group">
    <label>Seleccione el Valor</label>
    <select class="form-control" name="Precio" value="<?php echo $Precio; ?>">
  <option >8</option>
  <option >10</option>
  <option>15</option>
  <option>25</option>
  <option>300</option>
</select>
  </div>
  <div class="form-group">
    <label>Tipo de Habitación</label>
    <select class="form-control" name="TipoHabitacion" value="<?php echo $TipoHabitacion; ?>">
  <option>Simple</option>
  <option>Matrimonial</option>
  <option>Residencial</option>
  </div>
  </select>
  <div class="form-group">
    <label>Estado</label>
    <select class="form-control" name="Estado" value="<?php echo $Estado; ?>">
  <option>Disponible</option>
  <option>Ocupada</option>
  <option>Mantenimiento</option>
  </div>
  </select>
  <br/>
  <button type="submit" class="btn btn-success"><span class="glyphicon glyphicon-floppy-disk"></span> Guardar</button>
</form>
<form role="form" action="<?php echo base_url(); ?>Habitaciones">
  <br/>
  <button type="submit" class="btn btn-danger"><span class="glyphicon glyphicon-arrow-left"></span> Cancelar</button>
</form>