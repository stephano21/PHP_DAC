<?php
include("bd/conexion.php");
$db = DataBase::connect();
date_default_timezone_set("America/Guayaquil");

?>
<html lang="es">

<head>
	<meta charset="utf-8" />
	<title>Chang</title>
	<!-- boostrap 4 -->
	<link href="css/bootstrap.css" rel="stylesheet" /> <!-- css -->
	<script src="jq/jquery-3.6.4.js"></script> <!-- javascript -->
	<script src="js/bootstrap.js"></script>
	<script src="js/bootstrap.bundle.js"></script>
	<!-- Datatable -->
	<script src="datatable/jquery.dataTables.min.js"></script>
	<script src="datatable/dataTables.bootstrap4.min.js"></script>
	<link href="datatable/dataTables.bootstrap4.min.css" rel="stylesheet" />
	<!-- Swet Alert -->
	<script src="sweetalert/sweetalert-dev.js"></script>
	<link rel="stylesheet" href="sweetalert/sweetalert.css">
	<!-- Chosen -->
	<script src="chosen/chosen.jquery.min.js"></script>
	<link href='chosen/chosen.min.css' rel='stylesheet'>

</head>

<body>
	<div class="offset-2">
		<div class="row ">
			<h1>Registro de empleados</h1>
		</div>
		<div class="row">
			<div class="card mt-20">
				<div class="card-header">
					<h5>Datos del empleado</h5>
				</div>
				<div class="card-body m-15">
					<form id="Empleado" method="post" action="guardaris.php" enctype="multipart/form-data">
						<div class="row">

							<div class="input-group mb-3">
								<span class="input-group-text">RIF </span>
								<input id="rif" name="rif" onkeypress="return OnlyNumbers(event)" type="text"
									maxlength="250" class="form-control"
									placeholder="Numero de RIF" required />
							</div>
						</div>

						<div class="row">

							<div class="input-group mb-3">
								<span class="input-group-text">Cédula </span>
								<input type="text" maxlength="10" id="ced" name="ced"
									onkeypress="return OnlyNumbers(event)" class="form-control"
									placeholder="Ingrese la cédula del empleado" required />
							</div>
						</div>

						<div class="row">

							<div class="input-group mb-3">
								<span class="input-group-text">Nombre </span>
								<input id="nombre" name="nombre" onkeypress="return OnlyLetters(event)" type="text"
									maxlength="250" class="form-control"
									placeholder="Ingrese el nombre del empleado" required />
							</div>
						</div>

						<div class="row">

							<div class="input-group mb-3">
								<span class="input-group-text">Apellido </span>
								<input id="ape" name="apellido" onkeypress="return OnlyLetters(event)" type="text"
									maxlength="250" class="form-control"
									placeholder="Ingrese el aplellido del empleado" required />
							</div>
						</div>

						<div class="row">

							<div class="input-group mb-3">
								<span class="input-group-text">Direccion</span>
								<input id="dir" name="dir" onkeypress="return OnlyLetters(event)" type="text"
									maxlength="250" class="form-control "
									placeholder="Ingrese el direccion del empleado" required />
							</div>
						</div>

						<div class="row">

							<div class="input-group mb-3">
								<span class="input-group-text">Teléfono movil </span>
								<input type="text" maxlength="10" id="cell" name="cell"
									onkeypress="return OnlyNumbers(event)" class="form-control"
									placeholder="Numero de celular" required />
							</div>
						</div>

						<div class="row">

							<div class="input-group mb-3">
								<span class="input-group-text">Teléfono fijo </span>
								<input type="text" maxlength="10" id="tel" name="tel"
									onkeypress="return OnlyNumbers(event)" class="form-control"
									placeholder="Numero de telefono" required />
							</div>
						</div>

						<div class="row">

							<div class="input-group mb-3">
								<span class="input-group-text">Número contacto </span>
								<input type="text" maxlength="10" id="nContact" name="nContact"
									onkeypress="return OnlyNumbers(event)" class="form-control"
									placeholder="Numero de contacto" required />
							</div>
						</div>

						<div class="row">

							<div class="input-group mb-3">
								<span class="input-group-text">Fecha de ingreso </span>
								<input type="date" id="fing" name="fing" class="form-control" quired />
							</div>
						</div>

						<div class="row">

							<div class="input-group mb-3">
								<span class="input-group-text">Fecha de culminacion </span>
								<input type="date" id="fcul" name="fcul" class="form-control" required />
							</div>
						</div>

						<div class="row">

							<div class="input-group mb-3">
								<span class="input-group-text">Sueldo </span>
								<input type="number" id="sueldo" name="sueldo" class="form-control" placeholder="$ 250.00" required>
							</div>
						</div>

						<div class="row">

							<div class="input-group mb-3">
								<span class="input-group-text">Foto </span>
								<input type="file" id="foto" class="form-control" name="foto" accept="image/*">
							</div>
						</div>

						<div class="row">

							<div class="input-group mb-3">
								<span class="input-group-text">Nacionalidad </span>
								<input type="text" id="nacionalidad" name="nacionalidad" class="form-control"
									placeholder="Ingresa tu nacionalidad" required>
							</div>
						</div>

						<div class="row">

							<div class="input-group mb-3">
								<span class="input-group-text">Tienda </span>
								<select id="tienda" name="tienda" class="form-control">
									<option value="1">Tienda 1</option>
									<option value="2">Tienda 2</option>
									<option value="3">Tienda 3</option>

								</select>
							</div>
						</div>

						<div class="row">

							<div class="input-group mb-3">
								<span class="input-group-text">Cargo </span>
								<select id="cargo" name="cargo" class="form-control">
									<option value="1">Gerente</option>
									<option value="2">Asistente</option>
									<option value="3">Analista</option>

								</select>
							</div>
						</div>
						<div class="input-group mb-3">
							<input class="btn btn-primary form-control" type="submit" value="Registar" />
						</div>
					</form>
				</div>

			</div>
		</div>
		<div class="row">
			<div class="col-sm-12">
				<table id="empleados" class="table table-bordered table-striped table-hover table-small">
					<thead class="bg-success text-center">
						<th>Id</th>
						<th>RIF </th>
						<th>Cédula</th>
						<th>Nombre </th>
						<th>Apellido </th>
						<th>Direccion</th>
						<th>Telefono fijo</th>
						<th>Telefono movil</th>
						<th>Número contacto </th>
						<th>Fecha de ingreso</th>
						<th>Fecha de culminacion</th>
						<th>Suel do</th>
						<th>Foto</th>
						<th>Nacionalidad</th>
						<th>Cargo</th>
						<th>Tienda</th>
						<th>Acciones</th>
					</thead>
					<tbody>
					<?php
					$sentencia = "select * from Empleados where activo=1";
					$respuesta = $db->query($sentencia);
					while($arreglo = $respuesta->fetch_array()){
					?>
						<tr>
							<td><?php echo $arreglo['id_empleado']; ?></td>
							<td><?php echo $arreglo['RIF']; ?></td>
							<td><?php echo $arreglo['cedula']; ?></td>
							<td><?php echo $arreglo['nombre']; ?></td>
							<td><?php echo $arreglo['apellido']; ?></td>
							<td><?php echo $arreglo['direccion']; ?></td>
							<td><?php echo $arreglo['celular']; ?></td>
							<td><?php echo $arreglo['telefono']; ?></td>
							<td><?php echo $arreglo['n_contactp']; ?></td>
							<td><?php echo $arreglo['f_ingreso']; ?></td>
							<td><?php echo $arreglo['f_culminacion']; ?></td>
							<td><?php echo $arreglo['sueldo']; ?></td>
							<td> <img
									src="<?php echo $arreglo['foto']; ?>"
									height="100" width="100" alt=""></td>
							<td><?php echo $arreglo['nacionalidad']; ?></td>
							<td><?php echo $arreglo['tienda']; ?></td>
							<td><?php echo $arreglo['cargo']; ?></td>
							<td>
								<button type="button" class="btn btn-warning" onclick="ShowModal()">ACTUALIZAR</button>
								<button type="button" class="btn btn-danger"
									onclick="eliminar('1')">ELIMINAR</button>
							</td>
						</tr>
					<?php
					}
					?>
						
					</tbody>

				</table>
			</div>
		</div>
	</div>

	<div id="Update" class="modal" aria-hidden="true" tabindex="-1">
		<div class="modal-dialog modal-lg">
			<div class="modal-content">
				<div class="modal-header bg-success text-white">
					<div class="modal-title"><b>Actualizar datos</b></div>
				</div>
				<div class="modal-body">
					<form id="formulito" method="post" action="editaris.php" enctype="multipart/form-data">
						<input type="hidden" name="Eid" id="">
						<div class="container">
							<div class="row">

								<div class="input-group mb-3">
									<span class="input-group-text">RIF </span>
									<input id="Erif" name="rif" onkeypress="return OnlyLetters(event)" type="text"
										maxlength="250" class="form-control text-uppercase"
										placeholder="Ingrese el nombre del empleado" required />
								</div>
							</div>

							<div class="row">

								<div class="input-group mb-3">
									<span class="input-group-text">Cédula </span>
									<input type="text" maxlength="10" id="Eced" name="ced"
										onkeypress="return OnlyNumbers(event)" class="form-control"
										placeholder="Ingrese la cédula del empleado" required />
								</div>
							</div>

							<div class="row">

								<div class="input-group mb-3">
									<span class="input-group-text">Nombre </span>
									<input id="Enombre" name="nombre" onkeypress="return OnlyLetters(event)" type="text"
										maxlength="250" class="form-control text-uppercase"
										placeholder="Ingrese el nombre del empleado" required />
								</div>
							</div>

							<div class="row">

								<div class="input-group mb-3">
									<span class="input-group-text">Apellido </span>
									<input id="Eape" name="ape" onkeypress="return OnlyLetters(event)" type="text"
										maxlength="250" class="form-control text-uppercase"
										placeholder="Ingrese el nombre del empleado" required />
								</div>
							</div>

							<div class="row">

								<div class="input-group mb-3">
									<span class="input-group-text">Direccion</span>
									<input id="Edir" name="dir" onkeypress="return OnlyLetters(event)" type="text"
										maxlength="250" class="form-control text-uppercase"
										placeholder="Ingrese el nombre del empleado" required />
								</div>
							</div>

							<div class="row">

								<div class="input-group mb-3">
									<span class="input-group-text">Teléfono movil </span>
									<input type="text" maxlength="10" id="Ecell" name="cell"
										onkeypress="return OnlyNumbers(event)" step="0.01" min="456" max="9999999999"
										class="form-control" placeholder="Ingrese la cédula del empleado" required />
								</div>
							</div>

							<div class="row">

								<div class="input-group mb-3">
									<span class="input-group-text">Teléfono fijo </span>
									<input type="text" maxlength="10" id="Etel" name="tel"
										onkeypress="return OnlyNumbers(event)" step="0.01" min="456" max="9999999999"
										class="form-control" placeholder="Ingrese la cédula del empleado" required />
								</div>
							</div>

							<div class="row">

								<div class="input-group mb-3">
									<span class="input-group-text">Número contacto </span>
									<input type="text" maxlength="10" id="EnContact" name="nContact"
										onkeypress="return OnlyNumbers(event)" step="0.01" min="456" max="9999999999"
										class="form-control" placeholder="Ingrese la cédula del empleado" required />
								</div>
							</div>

							<div class="row">

								<div class="input-group mb-3">
									<span class="input-group-text">Fecha de ingreso </span>
									<input type="date" id="Efing" name="fing" class="form-control" required />
								</div>
							</div>

							<div class="row">

								<div class="input-group mb-3">
									<span class="input-group-text">Fecha de culminacion </span>
									<input type="date" id="Efcul" name="fcul" class="form-control" required />
								</div>
							</div>

							<div class="row">

								<div class="input-group mb-3">
									<span class="input-group-text">Sueldo </span>
									<input type="number" id="Esueldo" name="sueldo" class="form-control" min="0"
										max="10000" required>
								</div>
							</div>

							<div class="row">

								<div class="input-group mb-3">
									<span class="input-group-text">Foto </span>
									<input type="file" id="Efoto" class="form-control" name="foto" accept="image/*">
								</div>
							</div>

							<div class="row">

								<div class="input-group mb-3">
									<span class="input-group-text">Nacionalidad </span>
									<input type="text" id="Enacionalidad" name="nacionalidad" class="form-control"
										placeholder="Ingresa tu nacionalidad" required>
								</div>
							</div>

							<div class="row">

								<div class="input-group mb-3">
									<span class="input-group-text">Tienda </span>
									<select id="Etienda" name="tienda" class="form-control">
										<option value="1">Tienda 1</option>
										<option value="2">Tienda 2</option>
										<option value="3">Tienda 3</option>

									</select>
								</div>
							</div>

							<div class="row">

								<div class="input-group mb-3">
									<span class="input-group-text">Cargo </span>
									<select id="Ecargo" name="cargo" class="form-control">
										<option value="1">Gerente</option>
										<option value="2">Asistente</option>
										<option value="3">Analista</option>

									</select>
								</div>
							</div>


						</div>

						<div class="input-group mb-3">
							<input class="btn btn-primary form-control" type="submit" value="Actualizar" />
						</div>
					</form>

				</div>
				<div class="modal-footer">
					<button type="button" CLASS="btn btn-danger" onclick="HiddenModal()">Cancelar</button>
				</div>
			</div>
		</div>
	</div>



	<script>

		function ShowModal(id, rif, ced, nom, ape, dir, cell, tell, numcontacto, fingreso, fculminar, sueldo, foto, naci, cargo_id, tienda_id) {
			console.log(ced)
			$("#Update").modal("show");
			$("#Eid").val(id);
			$("#Erif").val(rif);
			$("#Eced").val(ced);
			$("#Enombre").val(nom);
			$("#Eape").val(ape);
			$("#Edir").val(dir);
			$("#Ecell").val(cell);
			$("#Etel").val(tell);
			$("#EnContact").val(numcontacto);
			$("#Efing").val(fingreso);
			$("#Efcul").val(fculminar);
			$("#Esueldo").val(sueldo);
			//$("#Efoto").val(foto);
			$("#Enacionalidad").val(naci);
			$("#Etienda option[value=" + tienda_id + "]").attr("selected", true);
			$("#Ecargo_id option[value=" + cargo_id + "]").attr("selected", true);
		}

		function HiddenModal() {
			$("#Update").modal("hide");
		}

		function eliminar(id) {
			swal({
				title: 'Chang',
				text: "Desea eliminar el empleado?",
				showCloseButton: true,
				showCancelButton: true,
				confirmButtonColor: '#3085d6',
				cancelButtonColor: '#dd3333',
				confirmButtonText: 'Aceptar',
				cancelButtonText: 'Cancelar'
			},
				function () {
					window.location.href = "eliminaris.php?id=" + id;
				});

		}






		function OnlyLetters(e) {
			let tecla = (document.all) ? e.keyCode : e.which; // 2
			if (tecla == 8) return true; // 3
			let patron = /[A-Za-z\s]/; // 4
			let te = String.fromCharCode(tecla); // 5
			return patron.test(te); // 6
		}


		function OnlyNumbers(e) {
			let tecla = (document.all) ? e.keyCode : e.which; // 2
			if (tecla == 8) return true; // 3
			let patron = /[0-9]/; // 4
			let te = String.fromCharCode(tecla); // 5
			return patron.test(te); // 6
		}

		$(document).ready(function () {
			$('#empleados').DataTable({
				"language": {
					"processing": "Procesando...",
					"lengthMenu": "Mostrar _MENU_ registros",
					"zeroRecords": "No se encontraron resultados",
					"emptyTable": "Ningún dato disponible en esta tabla",
					"info": "Mostrando registros del _START_ al _END_ de un total de _TOTAL_ registros",
					"infoEmpty": "Mostrando registros del 0 al 0 de un total de 0 registros",
					"infoFiltered": "(filtrado de un total de _MAX_ registros)",
					"search": "Buscar:",
					"infoThousands": ",",
					"loadingRecords": "Cargando...",
					"paginate": {
						"first": "Primero",
						"last": "Último",
						"next": "Siguiente",
						"previous": "Anterior"
					},
				}
			});
		});

		$(document).ready(function () {
			$('.chzn-select').chosen({ "width": "100%" });
			$('.chzn-drop').css({ "width": "300px" });
		})

	</script>


</body>

</html>