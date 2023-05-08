<?php
class EventData {
	public static $tablename = "event";

	public function __construct(){
		$this->name = "";
		$this->descripcion = "";
		$this->fecha = "";
		$this->direccion = "";
		$this->image = "";
	}

	public function add(){
		$sql = "insert into ".self::$tablename." (name,descripcion,fecha,direccion,image) ";
		$sql .= "value (\"$this->name\",\"$this->descripcion\",\"$this->fecha\",\"$this->direccion\",\"$this->image\")";
		Executor::doit($sql);
	}

	public function del(){
		$sql = "delete from ".self::$tablename." where id=$this->id";
		Executor::doit($sql);
	}

	public static function delBy($k,$v){
		$sql = "delete from ".self::$tablename." where $k=\"$v\"";
		Executor::doit($sql);
	}

	public function update(){
		$sql = "update ".self::$tablename." set name=\"$this->name\",descripcion=\"$this->descripcion\",fecha=\"$this->fecha\",direccion=\"$this->direccion\",image=\"$this->image\" where id=$this->id";
		Executor::doit($sql);
	}

	public function update_passwd(){
		$sql = "update ".self::$tablename." set password=\"$this->password\" where id=$this->id";
		Executor::doit($sql);
	}

	public function updateById($k,$v){
		$sql = "update ".self::$tablename." set $k=\"$v\" where id=$this->id";
		Executor::doit($sql);
	}

	public static function getById($id){
		 $sql = "select * from ".self::$tablename." where id=$id";
		$query = Executor::doit($sql);
		return Model::one($query[0],new EventData());
	}

	public static function getBy($k,$v){
		$sql = "select * from ".self::$tablename." where $k=\"$v\"";
		$query = Executor::doit($sql);
		return Model::one($query[0],new EventData());
	}

	public static function getByDate($date){
		$sql = "select count(*) as cnt from ".self::$tablename." where date(created_at)= \"$date\"";
		$query = Executor::doit($sql);
		return Model::one($query[0],new EventData());
	}


	public static function getAll(){
		 $sql = "select * from ".self::$tablename;
		$query = Executor::doit($sql);
		return Model::many($query[0],new EventData());
	}

	public static function getAllBy($k,$v){
		 $sql = "select * from ".self::$tablename." where $k=\"$v\"";
		$query = Executor::doit($sql);
		return Model::many($query[0],new EventData());
	}


	public static function getLike($q){
		$sql = "select * from ".self::$tablename." where name like '%$q%'";
		$query = Executor::doit($sql);
		return Model::many($query[0],new EventData());
	}


}

?>