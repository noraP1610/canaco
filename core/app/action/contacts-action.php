<?php

if(isset($_GET["opt"]) && $_GET["opt"]=="add"){

	$per = new PersonData();
	$per->name = $_POST["name"];
	$per->lastname = $_POST["lastname"];
	$per->address = $_POST["address"];
	$per->phone = $_POST["phone"];
	$per->email = $_POST["email"];

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
	Core::redir("./?view=contacts&opt=all");
}
else if(isset($_GET["opt"]) && $_GET["opt"]=="update"){

	$per = PersonData::getById($_POST["_id"]);
	$per->name = $_POST["name"];
	$per->lastname = $_POST["lastname"];
	$per->address = $_POST["address"];
	$per->phone = $_POST["phone"];
	$per->email = $_POST["email"];
	$per->update();
	Core::redir("./?view=contacts&opt=all");
}
else if(isset($_GET["opt"]) && $_GET["opt"]=="del"){
	$per = PersonData::getById($_GET["id"]);
	$per->del();
	Core::redir("./?view=contacts&opt=all");

}
?>