<?php if(isset($_GET["opt"]) && $_GET["opt"]=="all"):
$contacts = PersonData::getAll();
	?>
    <section class="content">
      <div class="container-fluid">
					<div class="row">
						<div class="col-12">

							<div class="card">
								<div class="card-header">
									<h1 class="">Servicios</h1>
									<a href="./?view=contacts&opt=new" class="btn btn-secondary">Nuevo Servicio</a>
								</div>
								<div class="card-body">
									<?php if(count($contacts)>0):?>
										<div>
										<table class="table table-bordered datatable">
											<thead>
												<th>Descripción del servicio</th>
												<th>Ubicación</th>
												<th>Teléfono</th>
												<th>Email</th>
												<th></th>
											</thead>
											<?php foreach($contacts as $con):?>
												<tr>
													<td><?php echo $con->name." ".$con->lastname; ?></td>
													<td><?php echo $con->address; ?></td>
													<td><?php echo $con->phone; ?></td>
													<td><?php echo $con->email; ?></td>
													<td style="width:160px; ">
														<a href="./?view=contacts&opt=edit&id=<?php echo $con->id; ?>" class="btn btn-warning btn-sm"><i class="fa fa-edit"></i> Editar</a>
														<a href="./?action=contacts&opt=del&id=<?php echo $con->id; ?>" id="item-<?php echo $con->id; ?>"  class="btn btn-danger btn-sm"><i class="fa fa-trash"></i> Eliminar</a>
														<script type="text/javascript">
															$("#item-<?php echo $con->id; ?>").click(function(e){
																e.preventDefault();
																x = confirm("Seguro desea eliminar este elemento?");
																if(x){
																	window.location = "./?action=contacts&opt=del&id=<?php echo $con->id; ?>";
																}
															});
														</script>
													</td>
												</tr>
											<?php endforeach ;?>
										</table>
									</div>

									<?php else:?>
										<p class="alert alert-warning">No hay Servicios.</p>
									<?php endif;?>
								</div>
							</div>

						</div>
					</div>
</div>
</section>
<?php elseif(isset($_GET["opt"]) && $_GET["opt"]=="new"):?>
    <section class="content">
      <div class="container-fluid">
					<div class="row">
						<div class="col-12">

							<div class="card">
								<div class="card-header">
									<h1 class="">Nuevo Servicio</h1>
									<a href="./?view=contacts&opt=all" class="btn btn-secondary"><i class="fa fa-arrow-left"></i> Regresar</a>
								</div>
								<div class="card-body">

<form method="post" enctype="multipart/form-data" action="./?action=contacts&opt=add">
  <div class="mb-3">
    <label for="name" class="form-label">Servcio: </label>
    <input type="text" name="name" class="form-control" id="name" placeholder="Servcio">
  </div>
  <div class="mb-3">
    <label for="lastname" class="form-label">Detalle del servicio:</label>
    <input type="text" name="lastname" id="lastname" class="form-control" placeholder="Detalle" >
  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Ubicación:</label>
    <input type="text" name="address" id="address" class="form-control" placeholder="Direccion" >
  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Email: </label>
    <input type="email" name="email" class="form-control" placeholder="Email">

  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Teléfono: </label>
    <input type="text" name="phone" id="phone" class="form-control" placeholder="Telefono" >
  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Imagen: </label>
    <input type="file" name="image" id="image" class="form-control" placeholder="Telefono" >
  </div>

  <button type="submit" class="btn btn-primary">Agregar</button>
</form>
								</div>
							</div>

						</div>
					</div>
</div>
</section>
<?php elseif(isset($_GET["opt"]) && $_GET["opt"]=="edit"):
$con = PersonData::getById($_GET["id"]);
	?>
    <section class="content">
      <div class="container-fluid">
					<div class="row">
						<div class="col-12">

							<div class="card">
								<div class="card-header">
									<h1 class="">Editar Servicio</h1>
									<a href="./?view=contacts&opt=all" class="btn btn-secondary"><i class="fa fa-arrow-left"></i> Regresar</a>
								</div>
								<div class="card-body">

<form method="post" action="./?action=contacts&opt=update">
	<input type="hidden" name="_id" value="<?php echo $con->id; ?>">
  <div class="mb-3">
    <label for="name" class="form-label">Servicio:</label>
    <input type="text" name="name" class="form-control" value="<?php echo $con->name; ?>" id="name" placeholder="Nombre">
  </div>
  <div class="mb-3">
    <label for="lastname" class="form-label">Detalles:</label>
    <input type="text" name="lastname" id="lastname" class="form-control"  value="<?php echo $con->lastname; ?>" placeholder="Apellidos" >
  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Ubicación:</label>
    <input type="text" name="address" id="address" class="form-control" value="<?php echo $con->address; ?>" placeholder="Direccion" >
  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Email: </label>
    <input type="email" name="email" class="form-control" value="<?php echo $con->email; ?>" placeholder="Email">

  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Teléfono:</label>
    <input type="text" name="phone" id="phone" class="form-control" value="<?php echo $con->phone; ?>" placeholder="Telefono" >
  </div>

  <button type="submit" class="btn btn-success">Actualizar</button>
</form>
								</div>
							</div>

						</div>
					</div>
</div>
</section>
<?php endif; ?>

