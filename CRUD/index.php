<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<title>Tabla CRUD Bootstrap para Base de Datos con Formularios Modales</title>
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto|Varela+Round">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
<style>
body {
	color: #566787;
    background-image: url('fondo3.png');
	font-family: 'Varela Round', sans-serif;
	font-size: 13px;
	margin: 30px;
	display: flex;
	min-height: 100vh;
}

/* Barra lateral */
.sidebar {
	width: 250px;
	background: linear-gradient(135deg, #435d7d 100%, #566787 100%);
	color: white;
	position: fixed;
	height: 90vh;
	left: 0;
	top: 0;
	display: flex;
	flex-direction: column;
	box-shadow: 2px 0 10px rgba(0,0,0,0.1);
	z-index: 1000;
    border-radius: 12px;
    margin-left: 50px;
    margin: 40px;
    border: 3px solid #00bcd4; /* Borde azul brillante */
    box-shadow: 0 0 20px rgba(0, 188, 212, 0.5); /* Efecto de brillo */
}

.sidebar-header {
	padding: 30px 20px;
	text-align: center;
	border-bottom: 1px solid rgba(255,255,255,0.1);
    
}

.photo-upload-area {
	width: 120px;
	height: 120px;
	border: 3px dashed rgba(255,255,255,0.5);
	border-radius: 50%;
	display: flex;
	flex-direction: column;
	align-items: center;
	justify-content: center;
	margin: 0 auto 20px;
	cursor: pointer;
	transition: all 0.3s ease;
	position: relative;
	overflow: hidden;
	
}

.photo-upload-area:hover {
	border-color: white;
	background: rgba(255,255,255,0.2);
	transform: scale(1.05);
}

.photo-upload-area.dragover {
	border-color: #4CAF50;
	background: rgba(76, 175, 80, 0.2);
	transform: scale(1.05);
}

.photo-preview {
	width: 100%;
	height: 100%;
	object-fit: cover;
	border-radius: 50%;
	display: none;
}

.upload-text {
	font-size: 12px;
	text-align: center;
	margin-top: 5px;
	color: rgba(255,255,255,0.8);
}

.upload-icon {
	font-size: 24px;
	color: rgba(255,255,255,0.6);
	margin-bottom: 5px;
}

.user-name {
	font-size: 18px;
	font-weight: 500;
	margin-bottom: 10px;
	color: white;
}

.sidebar-nav {
	flex: 1;
	padding: 20px 0;
}

.nav-item {
	padding: 15px 25px;
	cursor: pointer;
	transition: all 0.3s ease;
	border-left: 4px solid transparent;
	display: flex;
	align-items: center;
	font-size: 16px;
}

.nav-item:hover {
	background: rgba(255,255,255,0.1);
	border-left-color: white;
}

.nav-item i {
	margin-right: 15px;
	width: 20px;
	text-align: center;
}

.sidebar-footer {
	padding: 20px;
	border-top: 1px solid rgba(255,255,255,0.1);
}

.btn-logout {
	width: 100%;
	background: rgba(255,255,255,0.2);
	border: 1px solid rgba(255,255,255,0.3);
	color: white;
	padding: 12px;
	border-radius: 25px;
	font-weight: 500;
	transition: all 0.3s ease;
}

.btn-logout:hover {
	background: rgba(255,255,255,0.3);
	color: white;
	transform: translateY(-2px);
}

/* Contenido principal */
.main-content {
	margin-left: 280px;
	flex: 1;
	padding: 20px;
}

.table-responsive {
    margin: 30px 0;
}
.table-wrapper {
	background: #fff;
	padding: 20px 25px;
	border-radius: 3px;
	min-width: 1000px;
	box-shadow: 0 1px 1px rgba(0,0,0,.05);
}
.table-title {        
	padding-bottom: 15px;
	background: #435d7d;
	color: #fff;
	padding: 16px 30px;
	min-width: 100%;
	margin: -20px -25px 10px;
	border-radius: 3px 3px 0 0;
}
.table-title h2 {
	margin: 5px 0 0;
	font-size: 24px;
}
.table-title .btn-group {
	float: right;
}
.table-title .btn {
	color: #fff;
	float: right;
	font-size: 13px;
	border: none;
	min-width: 50px;
	border-radius: 2px;
	border: none;
	outline: none !important;
	margin-left: 10px;
}
.table-title .btn i {
	float: left;
	font-size: 21px;
	margin-right: 5px;
}
.table-title .btn span {
	float: left;
	margin-top: 2px;
}
table.table tr th, table.table tr td {
	border-color: #e9e9e9;
	padding: 12px 15px;
	vertical-align: middle;
}
table.table tr th:first-child {
	width: 60px;
}
table.table tr th:last-child {
	width: 100px;
}
table.table-striped tbody tr:nth-of-type(odd) {
	background-color: #fcfcfc;
}
table.table-striped.table-hover tbody tr:hover {
	background: #f5f5f5;
}
table.table th i {
	font-size: 13px;
	margin: 0 5px;
	cursor: pointer;
}	
table.table td:last-child i {
	opacity: 0.9;
	font-size: 22px;
	margin: 0 5px;
}
table.table td a {
	font-weight: bold;
	color: #566787;
	display: inline-block;
	text-decoration: none;
	outline: none !important;
}
table.table td a:hover {
	color: #2196F3;
}
table.table td a.edit {
	color: #FFC107;
}
table.table td a.delete {
	color: #F44336;
}
table.table td i {
	font-size: 19px;
}
table.table .avatar {
	border-radius: 50%;
	vertical-align: middle;
	margin-right: 10px;
}
.pagination {
	float: right;
	margin: 0 0 5px;
}
.pagination li a {
	border: none;
	font-size: 13px;
	min-width: 30px;
	min-height: 30px;
	color: #999;
	margin: 0 2px;
	line-height: 30px;
	border-radius: 2px !important;
	text-align: center;
	padding: 0 6px;
}
.pagination li a:hover {
	color: #666;
}	
.pagination li.active a, .pagination li.active a.page-link {
	background: #03A9F4;
}
.pagination li.active a:hover {        
	background: #0397d6;
}
.pagination li.disabled i {
	color: #ccc;
}
.pagination li i {
	font-size: 16px;
	padding-top: 6px
}
.hint-text {
	float: left;
	margin-top: 10px;
	font-size: 13px;
}    
/* Custom checkbox */
.custom-checkbox {
	position: relative;
}
.custom-checkbox input[type="checkbox"] {    
	opacity: 0;
	position: absolute;
	margin: 5px 0 0 3px;
	z-index: 9;
}
.custom-checkbox label:before{
	width: 18px;
	height: 18px;
}
.custom-checkbox label:before {
	content: '';
	margin-right: 10px;
	display: inline-block;
	vertical-align: text-top;
	background: white;
	border: 1px solid #bbb;
	border-radius: 2px;
	box-sizing: border-box;
	z-index: 2;
}
.custom-checkbox input[type="checkbox"]:checked + label:after {
	content: '';
	position: absolute;
	left: 6px;
	top: 3px;
	width: 6px;
	height: 11px;
	border: solid #000;
	border-width: 0 3px 3px 0;
	transform: inherit;
	z-index: 3;
	transform: rotateZ(45deg);
}
.custom-checkbox input[type="checkbox"]:checked + label:before {
	border-color: #03A9F4;
	background: #03A9F4;
}
.custom-checkbox input[type="checkbox"]:checked + label:after {
	border-color: #fff;
}
.custom-checkbox input[type="checkbox"]:disabled + label:before {
	color: #b8b8b8;
	cursor: auto;
	box-shadow: none;
	background: #ddd;
}
/* Modal styles */
.modal .modal-dialog {
	max-width: 400px;
}
.modal .modal-header, .modal .modal-body, .modal .modal-footer {
	padding: 20px 30px;
}
.modal .modal-content {
	border-radius: 3px;
	font-size: 14px;
}
.modal .modal-footer {
	background: #ecf0f1;
	border-radius: 0 0 3px 3px;
}
.modal .modal-title {
	display: inline-block;
}
.modal .form-control {
	border-radius: 2px;
	box-shadow: none;
	border-color: #dddddd;
}
.modal textarea.form-control {
	resize: vertical;
}
.modal .btn {
	border-radius: 2px;
	min-width: 100px;
}	
.modal form label {
	font-weight: normal;
}

/* Responsive */
@media (max-width: 768px) {
	.sidebar {
		width: 250px;
		transform: translateX(-100%);
		transition: transform 0.3s ease;
	}
	
	.sidebar.active {
		transform: translateX(0);
	}
	
	.main-content {
		margin-left: 0;
	}
}

/* Input file oculto */
#fileInput {
	display: none;
}

/* Animación de carga */
.upload-loading {
	position: absolute;
	top: 50%;
	left: 50%;
	transform: translate(-50%, -50%);
	display: none;
}

.spinner {
	border: 2px solid rgba(255,255,255,0.3);
	border-radius: 50%;
	border-top: 2px solid white;
	width: 20px;
	height: 20px;
	animation: spin 1s linear infinite;
}

@keyframes spin {
	0% { transform: rotate(0deg); }
	100% { transform: rotate(360deg); }
}
</style>
<script>
$(document).ready(function(){
	// Activar tooltip
	$('[data-toggle="tooltip"]').tooltip();
	
	// Seleccionar/Deseleccionar checkboxes
	var checkbox = $('table tbody input[type="checkbox"]');
	$("#selectAll").click(function(){
		if(this.checked){
			checkbox.each(function(){
				this.checked = true;                        
			});
		} else{
			checkbox.each(function(){
				this.checked = false;                        
			});
		} 
	});
	checkbox.click(function(){
		if(!this.checked){
			$("#selectAll").prop("checked", false);
		}
	});

	// Funcionalidad de drag and drop para la foto
	const photoUploadArea = document.getElementById('photoUploadArea');
	const fileInput = document.getElementById('fileInput');
	const photoPreview = document.getElementById('photoPreview');
	const uploadText = document.querySelector('.upload-text');
	const uploadIcon = document.querySelector('.upload-icon');
	const uploadLoading = document.querySelector('.upload-loading');

	// Click para seleccionar archivo
	photoUploadArea.addEventListener('click', function() {
		fileInput.click();
	});

	// Drag and drop events
	photoUploadArea.addEventListener('dragover', function(e) {
		e.preventDefault();
		photoUploadArea.classList.add('dragover');
	});

	photoUploadArea.addEventListener('dragleave', function(e) {
		e.preventDefault();
		photoUploadArea.classList.remove('dragover');
	});

	photoUploadArea.addEventListener('drop', function(e) {
		e.preventDefault();
		photoUploadArea.classList.remove('dragover');
		
		const files = e.dataTransfer.files;
		if (files.length > 0) {
			handleFile(files[0]);
		}
	});

	// Input file change
	fileInput.addEventListener('change', function(e) {
		if (e.target.files.length > 0) {
			handleFile(e.target.files[0]);
		}
	});

	// Función para manejar el archivo
	function handleFile(file) {
		// Validar tipo de archivo
		if (!file.type.startsWith('image/')) {
			alert('Por favor selecciona una imagen válida');
			return;
		}

		// Validar tamaño (máximo 5MB)
		if (file.size > 5 * 1024 * 1024) {
			alert('La imagen es muy grande. Máximo 5MB');
			return;
		}

		// Mostrar loading
		uploadIcon.style.display = 'none';
		uploadText.style.display = 'none';
		uploadLoading.style.display = 'block';

		// Leer y mostrar la imagen
		const reader = new FileReader();
		reader.onload = function(e) {
			setTimeout(function() {
				photoPreview.src = e.target.result;
				photoPreview.style.display = 'block';
				uploadLoading.style.display = 'none';
				
				// Actualizar nombre de usuario
				document.querySelector('.user-name').textContent = 'Usuario Logueado';
			}, 1000);
		};
		reader.readAsDataURL(file);
	}

	// Función para remover imagen
	function removeImage() {
		photoPreview.style.display = 'none';
		uploadIcon.style.display = 'block';
		uploadText.style.display = 'block';
		document.querySelector('.user-name').textContent = 'Nombre del usuario';
		fileInput.value = '';
	}

	// Doble click para remover imagen
	photoUploadArea.addEventListener('dblclick', function() {
		if (photoPreview.style.display === 'block') {
			if (confirm('¿Deseas eliminar la foto?')) {
				removeImage();
			}
		}
	});
});
</script>
</head>
<body>
<!-- Barra lateral -->
<div class="sidebar">
	<div class="sidebar-header">
		<div class="photo-upload-area" id="photoUploadArea">
			<i class="material-icons upload-icon">photo_camera</i>
			<img id="photoPreview" class="photo-preview" alt="Foto de perfil">
			<div class="upload-loading">
				<div class="spinner"></div>
			</div>
		</div>
		<div class="upload-text">
			Arrastra tu foto aquí<br>
			<small>o haz click para seleccionar</small>
		</div>
		<div class="user-name">Nombre del usuario</div>
		<input type="file" id="fileInput" accept="image/*">
	</div>
	
	<div class="sidebar-nav">

		<div class="nav-item">
			<i class="material-icons">settings</i>
			<span>CONFIGURACIÓN</span>
		</div>
		<div class="nav-item">
			<i class="material-icons">notifications</i>
			<span>NOTIFICACIONES</span>
		</div>
	</div>
	
	<div class="sidebar-footer">
		<button class="btn btn-logout">
			<i class="material-icons" style="font-size: 18px; margin-right: 8px;">exit_to_app</i>
			Salir
		</button>
	</div>
</div>

<!-- Contenido principal -->
<div class="main-content">
	<div class="container-xl">
		<div class="table-responsive">
			<div class="table-wrapper">
				<div class="table-title">
					<div class="row">
						<div class="col-sm-6">
							<h2>Gestión de <b>Empleados</b></h2>
						</div>
						<div class="col-sm-6">
							<a href="#addEmployeeModal" class="btn btn-success" data-toggle="modal"><i class="material-icons">&#xE147;</i> <span>Agregar Empleado</span></a>
							<a href="#deleteEmployeeModal" class="btn btn-danger" data-toggle="modal"><i class="material-icons">&#xE15C;</i> <span>Eliminar</span></a>						
						</div>
					</div>
				</div>
				<table class="table table-striped table-hover">
					<thead>
						<tr>
							<th>
								<span class="custom-checkbox">
									<input type="checkbox" id="selectAll">
									<label for="selectAll"></label>
								</span>
							</th>
							<th>Nombre</th>
							<th>Tipo Documento</th>
							<th>N° Documento</th>
							<th>Correo</th>
							<th>Dirección</th>
							<th>Teléfono</th>
							<th>Estado</th>
							<th>Acciones</th>
						</tr>
					</thead>
					<tbody>
						<tr>
							<td>
								<span class="custom-checkbox">
									<input type="checkbox" id="checkbox1" name="options[]" value="1">
									<label for="checkbox1"></label>
								</span>
							</td>
							<td>Carlos García</td>
							<td>CC</td>
							<td>12.345.678</td>
							<td>carlos.garcia@correo.com</td>
							<td>Calle Mayor 15, Madrid, España</td>
							<td>(91) 555-1234</td>
							<td><span class="badge badge-success">Activo</span></td>
							<td>
								<a href="#editEmployeeModal" class="edit" data-toggle="modal"><i class="material-icons" data-toggle="tooltip" title="Editar">&#xE254;</i></a>
								<a href="#deleteEmployeeModal" class="delete" data-toggle="modal"><i class="material-icons" data-toggle="tooltip" title="Eliminar">&#xE872;</i></a>
							</td>
						</tr>
						<tr>
							<td>
								<span class="custom-checkbox">
									<input type="checkbox" id="checkbox2" name="options[]" value="1">
									<label for="checkbox2"></label>
								</span>
							</td>
							<td>María López</td>
							<td>DNI</td>
							<td>87.654.321</td>
							<td>maria.lopez@correo.com</td>
							<td>Av. Libertador 234, Buenos Aires, Argentina</td>
							<td>(11) 555-5678</td>
							<td><span class="badge badge-success">Activo</span></td>
							<td>
								<a href="#editEmployeeModal" class="edit" data-toggle="modal"><i class="material-icons" data-toggle="tooltip" title="Editar">&#xE254;</i></a>
								<a href="#deleteEmployeeModal" class="delete" data-toggle="modal"><i class="material-icons" data-toggle="tooltip" title="Eliminar">&#xE872;</i></a>
							</td>
						</tr>
						<tr>
							<td>
								<span class="custom-checkbox">
									<input type="checkbox" id="checkbox3" name="options[]" value="1">
									<label for="checkbox3"></label>
								</span>
							</td>
							<td>Ana Martínez</td>
							<td>CURP</td>
							<td>MAAN850315MDFRTNA5</td>
							<td>ana.martinez@correo.com</td>
							<td>Paseo de la Reforma 456, Ciudad de México, México</td>
							<td>(55) 555-9876</td>
							<td><span class="badge badge-warning">Inactivo</span></td>
							<td>
								<a href="#editEmployeeModal" class="edit" data-toggle="modal"><i class="material-icons" data-toggle="tooltip" title="Editar">&#xE254;</i></a>
								<a href="#deleteEmployeeModal" class="delete" data-toggle="modal"><i class="material-icons" data-toggle="tooltip" title="Eliminar">&#xE872;</i></a>
							</td>
						</tr>
						<tr>
							<td>
								<span class="custom-checkbox">
									<input type="checkbox" id="checkbox4" name="options[]" value="1">
									<label for="checkbox4"></label>
								</span>
							</td>
							<td>José Rodríguez</td>
							<td>CC</td>
							<td>98.765.432</td>
							<td>jose.rodriguez@correo.com</td>
							<td>Cra. 7 # 45-67, Bogotá, Colombia</td>
							<td>(1) 555-2468</td>
							<td><span class="badge badge-success">Activo</span></td>
							<td>
								<a href="#editEmployeeModal" class="edit" data-toggle="modal"><i class="material-icons" data-toggle="tooltip" title="Editar">&#xE254;</i></a>
								<a href="#deleteEmployeeModal" class="delete" data-toggle="modal"><i class="material-icons" data-toggle="tooltip" title="Eliminar">&#xE872;</i></a>
							</td>
						</tr>					
						<tr>
							<td>
								<span class="custom-checkbox">
									<input type="checkbox" id="checkbox5" name="options[]" value="1">
									<label for="checkbox5"></label>
								</span>
							</td>
							<td>Laura Fernández</td>
							<td>RUT</td>
							<td>15.234.567-8</td>
							<td>laura.fernandez@correo.com</td>
							<td>Av. Las Condes 890, Santiago, Chile</td>
							<td>(2) 555-1357</td>
							<td><span class="badge badge-danger">Suspendido</span></td>
							<td>
								<a href="#editEmployeeModal" class="edit" data-toggle="modal"><i class="material-icons" data-toggle="tooltip" title="Editar">&#xE254;</i></a>
								<a href="#deleteEmployeeModal" class="delete" data-toggle="modal"><i class="material-icons" data-toggle="tooltip" title="Eliminar">&#xE872;</i></a>
							</td>
						</tr> 
					</tbody>
				</table>
				<div class="clearfix">
					<div class="hint-text">Mostrando <b>5</b> de <b>25</b> registros</div>
					<ul class="pagination">
						<li class="page-item disabled"><a href="#">Anterior</a></li>
						<li class="page-item"><a href="#" class="page-link">1</a></li>
						<li class="page-item"><a href="#" class="page-link">2</a></li>
						<li class="page-item active"><a href="#" class="page-link">3</a></li>
						<li class="page-item"><a href="#" class="page-link">4</a></li>
						<li class="page-item"><a href="#" class="page-link">5</a></li>
						<li class="page-item"><a href="#" class="page-link">Siguiente</a></li>
					</ul>
				</div>
			</div>
		</div>        
	</div>
</div>

<!-- Modal Agregar Empleado -->
<div id="addEmployeeModal" class="modal fade">
	<div class="modal-dialog">
		<div class="modal-content">
			<form>
				<div class="modal-header">						
					<h4 class="modal-title">Agregar Empleado</h4>
					<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
				</div>
				<div class="modal-body">					
					<div class="form-group">
						<label>Nombre</label>
						<input type="text" class="form-control" required>
					</div>
					<div class="form-group">
						<label>Tipo de Documento</label>
						<select class="form-control" required>
							<option value="">Seleccionar...</option>
							<option value="CC">Cédula de Ciudadanía (CC)</option>
							<option value="DNI">Documento Nacional de Identidad (DNI)</option>
							<option value="CURP">CURP</option>
							<option value="RUT">RUT</option>
							<option value="Pasaporte">Pasaporte</option>
						</select>
					</div>
					<div class="form-group">
						<label>Número de Documento</label>
						<input type="text" class="form-control" required>
					</div>
					<div class="form-group">
						<label>Correo Electrónico</label>
						<input type="email" class="form-control" required>
					</div>
					<div class="form-group">
						<label>Contraseña</label>
						<input type="password" class="form-control" required>
					</div>
					<div class="form-group">
						<label>Dirección</label>
						<textarea class="form-control" required></textarea>
					</div>
					<div class="form-group">
						<label>Teléfono</label>
						<input type="text" class="form-control" required>
					</div>
					<div class="form-group">
						<label>Estado</label>
						<select class="form-control" required>
							<option value="">Seleccionar...</option>
							<option value="Activo">Activo</option>
							<option value="Inactivo">Inactivo</option>
							<option value="Suspendido">Suspendido</option>
						</select>
					</div>					
				</div>
				<div class="modal-footer">
					<input type="button" class="btn btn-default" data-dismiss="modal" value="Cancelar">
					<input type="submit" class="btn btn-success" value="Agregar">
				</div>
			</form>
		</div>
	</div>
</div>
<!-- Modal Editar Empleado -->
<div id="editEmployeeModal" class="modal fade">
	<div class="modal-dialog">
		<div class="modal-content">
			<form>
				<div class="modal-header">						
					<h4 class="modal-title">Editar Empleado</h4>
					<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
				</div>
				<div class="modal-body">					
					<div class="form-group">
						<label>Nombre</label>
						<input type="text" class="form-control" required>
					</div>
					<div class="form-group">
						<label>Tipo de Documento</label>
						<select class="form-control" required>
							<option value="">Seleccionar...</option>
							<option value="CC">Cédula de Ciudadanía (CC)</option>
							<option value="DNI">Documento Nacional de Identidad (DNI)</option>
							<option value="CURP">CURP</option>
							<option value="RUT">RUT</option>
							<option value="Pasaporte">Pasaporte</option>
						</select>