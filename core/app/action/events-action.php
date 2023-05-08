<?php

if(isset($_GET["opt"]) && $_GET["opt"]=="add"){

	$per = new EventData();
	$per->name = $_POST["name"];
	$per->descripcion = $_POST["descripcion"];
	$per->fecha = $_POST["fecha"];
	$per->direccion = $_POST["direccion"];

 $check = getimagesize($_FILES["image"]["tmp_name"]);
    if($check != false){

	$img = $_FILES["image"]["tmp_name"];
    $per->image = addslashes(file_get_contents($img));
    echo "Registro satisfactorio";
    
    
}
else
 {echo "Error al registrar evento";

}
	$per->add();
	Core::redir("./?view=events&opt=all");
}
else if(isset($_GET["opt"]) && $_GET["opt"]=="update"){

	$per = EventData::getById($_POST["_id"]);
	$per->name = $_POST["name"];
	$per->descripcion = $_POST["descripcion"];
	$per->fecha = $_POST["fecha"];
	$per->direccion = $_POST["direccion"];
	$check = getimagesize($_FILES["image"]["tmp_name"]);
    if($check != false){

	$img = $_FILES["image"]["tmp_name"];
    $per->image = addslashes(file_get_contents($img));
    echo "Actualización satisfactoria";
    
    
}
else
 {echo "Error al actualizar evento";

}
	$per->update();
	Core::redir("./?view=events&opt=all");
}
else if(isset($_GET["opt"]) && $_GET["opt"]=="del"){
	$per = EventData::getById($_GET["id"]);
	$per->del();
	Core::redir("./?view=events&opt=all");

}
?>