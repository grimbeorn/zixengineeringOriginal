<html>

<head>
	<title>Nuevo Presupuesto</title>
</head>

<body>
	<p>Has recibido un nuevo e-mail, estos son los datos:</p>
	<ul>
		<li>
			<strong>Nombre: </strong>
			{{ $n }}
		</li>
		<li>
			<strong>Apellido: </strong>
			{{ $a }}
		</li>
		<li>
			<strong>Correo: </strong>
			{{ $c }}
		</li>
		<li>
			<strong>Teléfono: </strong>
			{{ $t }}
		</li>
		<li>
			<strong>Nombre Proyecto: </strong>
			{{ $nombreProyecto }}
		</li>
		<li>
			<strong>Ubicación: </strong>
			{{ $ubicacion }}
		</li>
		<li>
			<strong>Tipo de estructura: </strong>
			{{ $tipoEstructura }}
		</li>
		<li>
			<strong>Otra: </strong>
			{{ $otra }}
		</li>
		<li>
			<strong>Servicio Requerido: </strong>
			{{ $servicioRequerido }}
		</li>
		<li>
			<strong>m2: </strong>
			{{ $m2 }}
		</li>
		<li>
			<strong>Adjuntar: </strong>
			{{ $adjuntar }}
		</li>
		<li>
			<strong>Mensaje: </strong>
			{{ $m }}
		</li>

	</ul>
</body>

</html>