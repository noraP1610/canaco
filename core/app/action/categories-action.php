<?php

if(isset($_GET["opt"]) && $_GET["opt"]=="add"){

	$per = new CategoryData();
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
 {echo "Error al registrar servicio";

}
	$per->add();
	Core::redir("./?view=categories&opt=all");
}
else if(isset($_GET["opt"]) && $_GET["opt"]=="update"){

	$per = CategoryData::getById($_POST["_id"]);
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
 {echo "Error al registrar servicio";

}

	$per->update();
	Core::redir("./?view=categories&opt=all");
}
else if(isset($_GET["opt"]) && $_GET["opt"]=="del"){
	$per = CategoryData::getById($_GET["id"]);
	$per->del();
	Core::redir("./?view=categories&opt=all");

}
?>