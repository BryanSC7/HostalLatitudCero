<div class="panel panel-primary">
  <div class="panel-heading"><span class="glyphicon glyphicon-home"></span> Lista de Habitaciones</div>
  <div class="panel-body">		
		<a href="<?php echo base_url(); ?>Habitaciones/agregar" class="btn btn-primary btn-sm"><span class="glyphicon glyphicon-plus"></span> Nuevo</a>
		<table class="table table-striped">
		      <tr>
		        <th>Nº</th>
		        <th>Número</th>
		        <th>Piso</th>
		        <td>Descripción</td>
		        <td>Características</td>
		        <td>Precio</td>
		        <td>Tipo</td>
		        <td>Estado</td>
		        <th>Opciones</th>
		      </tr>
		      <?php
		      	$IdHabitacion=0;
		      	foreach ($sql2->result() as $obj2){
		      		$IdHabitacion++;
		      		?>
		      			<tr>
		      				<td><?php echo $IdHabitacion; ?></td>
		      				<td><?php echo $obj2->Numero; ?></td>
		      				<td><?php echo $obj2->Piso; ?></td>
		      				<td><?php echo $obj2->Descripcion; ?></td>
		      				<td><?php echo $obj2->Caracteristicas; ?></td>
		      				<td><?php echo $obj2->Precio; ?></td>
		      				<td><?php echo $obj2->TipoHabitacion; ?></td>
		      				<td><?php echo $obj2->Estado; ?></td>
		      				<td>
		      					<a href="<?php echo base_url();?>Habitaciones/editar/<?php echo $obj2->IdHabitacion;?>" class="btn btn-info btn-xs"><span class="glyphicon glyphicon-pencil" ></span></a>
			      				<a href="javascript:if(confirm('¿Realmente desea eliminar el registro?')){document.location='<?php echo base_url(); ?>/Habitaciones/eliminar/<?php echo $obj2->IdHabitacion; ?>';}" class="btn btn-danger btn-xs"><span class="glyphicon glyphicon-trash" ></span></a>

		      				</td>
		      			</tr>
		      			<?php
		      	}
		      ?>
		</table>
	</div>
</div>