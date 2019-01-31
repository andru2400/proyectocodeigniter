
	<h1>Registro - Crear - Persona</h1>
	<form action="<?php echo base_url();?>PersonaController/store" method="POST">
		<table>
			<tr>
				<td><label for="dni">Dni</label></td>
				<td><input type="text" name="dni"></td>
			</tr>
			<tr>
				<td><label for="nombres">Nombres</label></td>
				<td><input type="text" name="nombres"></td>
			</tr>				
			<tr>
				<td><label for="primer_apellido">1 Apellido</label></td>
				<td><input type="text" name="primer_apellido"></td>
			</tr>
			<tr>
				<td><label for="segundo_apellido">2 Apellido</label></td>
				<td><input type="text" name="segundo_apellido"></td>
			</tr>
			<tr>
				<td><label for="segundo_apellido">ciudad</label></td>
				<td>					
                  <select id="cbociudad" class="form-control">
                    <option value="">Elija.</option>                                 
                  </select>                
				</td>
			</tr>
			<tr>
				<td><label for="email">Email</label></td>
				<td><input type="text" name="email"></td>
			</tr>			
			<tr>
				<td><label for="fecha_nacimiento">Fecha Nacimiento</label></td>
				<td><input type="date" name="fecha_nacimiento"></td>
			</tr>
			<tr>
				<td><label for="">Usuario</label></td>
			</tr>			
			<tr>
				<td><label for="usuario">Usuario</label></td>
				<td><input type="text" name="usuario"></td>
			</tr>			
			<tr>
				<td><label for="pass">password</label></td>
				<td><input type="password" name="pass"></td>
			</tr>
			<tr>				
				<td><input type="submit" name="Guardar"></td>
			</tr>
		</table>
	</form>
	<a href="<?php echo base_url();?>LoginController">Loguearse</a>

<script>
	var baseUrl = "<?php echo base_url();?>"; // se crea una variable para js, con la url. para poder hacer ajax.
	// alert(baseUrl);	
</script>