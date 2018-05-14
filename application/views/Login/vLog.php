<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Welcome to CodeIgniter</title>
</head>
<body>
  <h1>Login</h1>
		<form class="" action="<?php echo base_url();?>index.php/cLog/guardar" method="post">
			<table>
				<tr>
					<td><label>Usuario</label></td>
					<td><input type="text" name="txtUser" maxlength="25"></td>
				</tr>
				<tr>
					<td>Pass</td>
					<td><input type="password" name="pass" maxlength="25"></td>
				</tr>
				<tr>
					<td>Perfil</td>
					<td><input type="text" name="perfil" maxlength="25"></td>
				</tr>
				<tr>
					<td colspan="2"><input type="submit" value="Guardar"></td>
				</tr>
			</table>

		</form>
</body>
</html>
