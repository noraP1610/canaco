<?php if(isset($_GET["opt"]) && $_GET["opt"]=="all"):
$contacts = EventData::getAll();
	?>
    <section class="content">
      <div class="container-fluid">
					<div class="row">
						<div class="col-12">
							<div class="card">
								<div class="card-header">
									<h1 class="">Eventos</h1>
									<a href="./?view=events&opt=new" class="btn btn-secondary">Nuevo Evento</a>
								</div>
								<div class="card-body">
									<?php if(count($contacts)>0):?>
										<div>
										<table class="table table-bordered datatable">
											<thead>
												<th>Nombre de Evento</th>

												<th></th>
											</thead>
											<?php foreach($contacts as $con):?>
												<tr>
													<td><?php echo $con->name; ?></td>

													<td style="width:160px; ">
														<a href="./?view=events&opt=edit&id=<?php echo $con->id; ?>" class="btn btn-warning btn-sm"><i class="fa fa-edit"></i> Editar</a>
														<a href="./?action=events&opt=del&id=<?php echo $con->id; ?>" id="item-<?php echo $con->id; ?>"  class="btn btn-danger btn-sm"><i class="fa fa-trash"></i> Eliminar</a>
														<script type="text/javascript">
															$("#item-<?php echo $con->id; ?>").click(function(e){
																e.preventDefault();
																x = confirm("Seguro desea eliminar este elemento?");
																if(x){
																	window.location = "./?action=events&opt=del&id=<?php echo $con->id; ?>";
																}
															});
														</script>
													</td>
												</tr>
											<?php endforeach ;?>
										</table>
									</div>

									<?php else:?>
										<p class="alert alert-warning">No hay Eventos.</p>
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
									<h1 class="">Nuevo Evento</h1>
									<a href="./?view=events&opt=all" class="btn btn-secondary"><i class="fa fa-arrow-left"></i> Regresar</a>
								</div>
								<div class="card-body">

<form method="post" enctype="multipart/form-data" action="./?action=events&opt=add">
  <div class="mb-3">
    <label for="name" class="form-label">Nombre</label>
    <input type="text" name="name" class="form-control" id="name" placeholder="Nombre">
  </div>
  <div class="mb-3">
    <label for="name" class="form-label">Descripción</label>
    <input type="text" name="descripcion" class="form-control" id="descripcion" placeholder="Descripción">
  </div>
  <div class="mb-3">
    <label for="name" class="form-label">Fecha</label>
    <input type="date" name="fecha" class="form-control" id="fecha" placeholder="Fecha">
  </div>
  <div class="mb-3">
    <label for="name" class="form-label">Dirección</label>
    <input type="text" name="direccion" class="form-control" id="direccion" placeholder="Direccion">
  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Imagen: </label>
    <input type="file" name="image" id="image" class="form-control" placeholder="Imagen" >
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
$con = EventData::getById($_GET["id"]);
	?>
    <section class="content">
      <div class="container-fluid">
					<div class="row">
						<div class="col-12">

							<div class="card">
								<div class="card-header">
									<h1 class="">Editar Evento</h1>
									<a href="./?view=events&opt=all" class="btn btn-secondary"><i class="fa fa-arrow-left"></i> Regresar</a>
								</div>
								<div class="card-body">

<form method="post" enctype="multipart/form-data" action="./?action=events&opt=update">
	<input type="hidden" name="_id" value="<?php echo $con->id; ?>">
  <div class="mb-3">
    <label for="name" class="form-label">Nombre</label>
    <input type="text" name="name" class="form-control" value="<?php echo $con->name; ?>" id="name" placeholder="Nombre">
  </div>

  <div class="mb-3">
    <label for="name" class="form-label">Descripción</label>
    <input type="text" name="descripcion" class="form-control" value="<?php echo $con->descripcion; ?>" id="descripcion" placeholder="Descripción">
  </div>
  <div class="mb-3">
    <label for="name" class="form-label">Fecha</label>
    <input type="date" name="fecha" class="form-control" value="<?php echo $con->fecha; ?>" id="email" placeholder="Fecha">
  </div>
  <div class="mb-3">
    <label for="name" class="form-label">Dirección</label>
    <input type="text" name="direccion" class="form-control" value="<?php echo $con->direccion; ?>" id="direccion" placeholder="Direccion">
  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Imagen: </label>
    <input type="file" name="image" id="image" class="form-control" placeholder="Imagen" >
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

