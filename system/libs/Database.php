<?php
class Database extends PDO{
	public function __construct($dsn,$user,$pass){

		
		parent::__construct($dsn,$user,$pass);
	}
	public function select($sql, $data =array(), $fetchStyle = PDO::FETCH_ASSOC){
	$stmt = $this->prepare($sql);
	foreach ($data as $key => $value){
		$stmt->bindParam($key, $value);//ekhane :$key=:id  and  $value=$id
	}
	$stmt->execute();
	return $stmt->fetchAll($fetchStyle);
}
public function insert($table, $data){ //v-13[16:00]
	$keys = implode(",", array_keys($data));
	$values = ":" .implode(", :", array_keys($data));
	$sql="INSERT INTO $table($keys) VALUES($values)"; //1
	$stmt = $this->prepare($sql);//2
	foreach ($data as $key => $value){
		$stmt->bindParam(":$key", $value); //ekhane :$key=:id  and  $value=$id
	}
	return $stmt->execute();//3
}
	// public function select($table){
	// 		$sql = "select * from $table";
	// 		$stmt = $this->prepare($sql);
	// 		$stmt->execute();
	// 		return $stmt->fetchAll();
		// $query=$this->db->query($sql);
		// $result=$query->fetchAll();
		// return $result;
	}


?>
<?php
// class Database
// class Database extends PDO{
// public function __construct($dsn,$user,$pass){
	
// 	// new PDO($dsn, $user, $pass);
// 	parent::__construct($dsn,$user,$pass);
// }
// public function select($sql, $data =array(), $fetchStyle = PDO::FETCH_ASSOC){
// 	$stmt = $this->prepare($sql);
// 	foreach ($data as $key => $value){
// 		$stmt->bindParam($key, $value);
// 	}
// 	$stmt->execute();
// 	return $stmt->fetchAll($fetchStyle);
// }
// public function insert($table, $data){
// 	$keys = implode(",", array_keys($data));
// 	$values = ":" .implode(", :", array_keys($data));
// 	$sql="INSERT INTO $table($keys) VALUES($values)";
// 	$stmt = $this->prepare($sql);
// 	foreach ($data as $key => $value){
// 		$stmt->bindParam(":$key", $value); //ekhane :$key=:id  and  $value=$id
// 	}
// 	return $stmt->execute();
// }
// }

?>