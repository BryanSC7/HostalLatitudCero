<div class="panel panel-primary">
  <div class="panel-heading"><span class="glyphicon glyphicon-user"></span> Lista de Contactos</div>
  <div class="panel-body">
		<a href="<?php echo base_url(); ?>home/agregar" class="btn btn-primary btn-sm"><span class="glyphicon glyphicon-plus"></span> Nuevo</a>
		<table class="table table-striped">
		      <tr>
		        <th>Nº</th>
		        <th>Nombre</th>
		        <th>Direccion</th>
		        <th>Opciones</th>
		      </tr>
		      <?php
		      	$id=0;
		      	foreach ($sql1->result() as $obj1){
		      		$id++;
		      		?>
		      			<tr>
		      				<td><?php echo $id; ?></td>
		      				<td><?php echo $obj1->nombre; ?></td>
		      				<td><?php echo $obj1->direccion; ?></td>
		      				<td>
		      					<a href="<?php echo base_url();?>home/editar/<?php echo $obj1->id;?>" class="btn btn-info btn-xs"><span class="glyphicon glyphicon-pencil" ></span></a>
			      				<a href="javascript:if(confirm('¿Realmente desea eliminar el registro?')){document.location='<?php echo base_url(); ?>/home/eliminar/<?php echo $obj1->id; ?>';}" class="btn btn-danger btn-xs"><span class="glyphicon glyphicon-trash" ></span></a>

		      				</td>
		      			</tr>
		      			<?php
		      	}
		      ?>
		</table>
	</div>
</div>