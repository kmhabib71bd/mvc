<?php
class CatModel extends DModel{
	function __construct(){
		parent::__construct();

	}
	public function catList($table){
		$sql ="select * from $table";
		return $this->db->select($sql);
	
	}
	public function catListmenus($table){
		$sql ="select * from $table";
		return $this->db->select($sql);
	
	}
		public function catById($table, $id){
		$sql ="select * from $table where id=:id";
			$data = array(":id"=>$id);
			return $this->db->select($sql, $data);
		


	
		// 

	
	}
		public function insertCat($table, $data){
		return $this->db->insert($table, $data);
	}

	public function catUpdate($table,$data,$cond){
		return  $this->db->update($table,$data,$cond);
	}
	public function delCatById($table,$cond){
		return  $this->db->delete($table,$cond);
	}
	// public function catList(){
	// 	return  array (
	// 		array(
	// 		'catOne'=>'Education',
	// 		'catTwo'=>'Sports',
	// 		'catThree'=>'Health'
	// 	),
	// 	 array(
	// 		'catOne'=>'Education',
	// 		'catTwo'=>'Sports',
	// 		'catThree'=>'Health'
	// 	)
	// 	);
	
//}
}
?>


<?php
// class CatModel extends DModel{
// 	public function __construct(){
// 		parent:: __construct();//ekhane DModel thake db shokol information parent:: __construct();er maddhome ekhane pass kora hoecha.
// 		//echo "Category model";
// 	}
// // 	public function catList(){
// // 		return array(
// // 			array(
// // 			'catOne' => 'Education',
// // 			'catTwo' => 'Sports',
// // 			'catThree' => 'Health'
// // 		),
// // 		array(
// // 			'catOne' => 'Education',
// // 			'catTwo' => 'Sports',
// // 			'catThree' => 'Health'
// // 		),
// // );
// // 	}
// 	public function catList($table){
// 		$sql ="select * from $table" ;
// 		return $this->db->select($sql);
// 	}
	// public function catById($table, $id){
	// 	$sql ="select * from $table where id=:id";
	// 	$data = array(":id"=>$id);
	// 	return $this->db->select($sql, $data);

	
	// }
// 	public function insertCat($table, $data){
// 		return $this->db->insert($table, $data);
// 	}
// }


?>