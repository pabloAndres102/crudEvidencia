<?php require_once '../dao/Roles.dao.php' ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8" />
	<title>Document</title>
	<link rel="stylesheet" href="../estilos/styles.css">
</head>
<body>
<div class="caja">
	<header>
		<h1>Roles</h1>
		<h2>Listar</h2>
	</header>

	<a href="ingresar.html">Ingresar nuevo</a>

	<table>
		<tr>
			<th>Nombre</th>
			<th colspan="2">Opciones</th>
		</tr>
		<?php foreach (RolesDAO::listarDatos() as $fila) { ?>
			<tr>
				<td><?= $fila[1] ?></td>
				<td><a href="editar.php?id=<?=$fila[0]?>">Editar</a></td>
				<td><a href="../controladores/Roles.controlador.php?a=elim&id=<?=$fila[0]?>" onclick="return confirm('¿Desea eliminar?')">Eliminar</a></td>
			</tr>
		<?php } ?>
	</table>
</div>
</body>
</html>