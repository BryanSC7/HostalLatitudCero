<!DOCTYPE html>
<html>
<head>
	<title>VER DEL VALIDAR</title>
</head>
<body>

	<div class="jsError">

	</div>

	<H3>Validaciones</H3>
	<?php echo form_open('Validacion/confirmar',array('class'=>'jsform')); ?>
	<p><input type="text" name="website"></p>
	<p><input type="submit" value="Check Website"></p>
	<?php echo form_close(); ?>
</body>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<script>
	$(document).ready(function(){
		$('validar.jsform').on('submit',function(validar){
			validar.preventDefault();
			$.post('/Validacion/confirmar',$(validar.jsform).serialize(), function(data){
				console.lod(data);
			});
		});
	});
</script>

</html>