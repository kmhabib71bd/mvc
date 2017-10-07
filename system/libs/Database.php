<?php
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