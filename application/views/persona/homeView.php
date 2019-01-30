<!DOCTYPE html>
<html>
<head>
	<title>
		
	</title>
</head>
<body>
  <form action="<?php echo base_url()?>PersonaController/actualize" method="POST">
	<p>Bienvenido Usuario: <?php echo $this->session->userdata('nombres'); ?></p>
	<h1>Actualizar persona (Mis datos)</h1>

	<label>nombres</label>
	<input type="text" name="nombres"><br>

	<label>primer_apellido</label>
	<input type="text" name="primer_apellido"><br>

	<label>segundo_apellido</label>
	<input type="text" name="segundo_apellido"><br>

	<label>email</label>
	<input type="text" name="email"><br>


	<input type="submit" value="Actualizar" ">
  </form>

   <form action="<?php echo base_url()?>PersonaController/destroy" method="POST">
	<p>Bienvenido Usuario: <?php echo $this->session->userdata('nombres'); ?></p>
	<h1>AEliminar persona (Mis datos)</h1>

	<label>id persona</label>
	<input type="text" name="id_persona"><br>	

	<input type="submit" value="Eliminar" ">
  </form>

</body>
</html>