<?php

if(isset($_GET["opt"]) && $_GET["opt"]=="add"){

	$per = new  TourData();
	$per->name = $_POST["name"];
	$per->descripcion = $_POST["descripcion"];
	$per->email = $_POST["email"];
	$per->direccion = $_POST["direccion"];

 $check = getimagesize($_FILES["image"]["tmp_name"]);
    if($check != false){

	$img = $_FILES["image"]["tmp_name"];
    $per->image = addslashes(file_get_contents($img));
    echo "Registro satisfactorio";
    
    
}
else
 {echo "Error al registrar  Tour";

}
	$per->add();
	Core::redir("./?view=tours&opt=all");
}
else if(isset($_GET["opt"]) && $_GET["opt"]=="update"){

	$per =  TourData::getById($_POST["_id"]);
	$per->name = $_POST["name"];
	$per->descripcion = $_POST["descripcion"];
	$per->email = $_POST["email"];
	$per->direccion = $_POST["direccion"];
	$check = getimagesize($_FILES["image"]["tmp_name"]);
    if($check != false){

	$img = $_FILES["image"]["tmp_name"];
    $per->image = addslashes(file_get_contents($img));
    echo "Actualización satisfactoria";
    
    
}
else
 {echo "Error al actualizar  Touro";

}
	$per->update();
	Core::redir("./?view=tours&opt=all");
}
else if(isset($_GET["opt"]) && $_GET["opt"]=="del"){
	$per =  TourData::getById($_GET["id"]);
	$per->del();
	Core::redir("./?view=tours&opt=all");

}
?>