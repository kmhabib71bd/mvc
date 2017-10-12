<?php
class PostModel extends DModel{
	function __construct(){
		parent::__construct();

	}
	public function getAllPost($table){
		$sql ="select * from $table order by id desc limit 7";
		return $this->db->select($sql);
	
	}
	public function getPostById( $tablePost, $tableCat, $id ){
		$sql ="SELECT $tablePost.*,$tableCat.name FROM $tablePost INNER JOIN $tableCat 
			ON $tablePost.cat = $tableCat.id
			WHERE $tablePost.id=$id"; 
		return $this->db->select($sql);
	}
	public function getPostBycat($tablePost, $tableCat, $id ){
		$sql ="SELECT $tablePost.*,$tableCat.name FROM $tableCat INNER JOIN $tablePost
			ON $tablePost.cat = $tableCat.id
			WHERE $tableCat.id=$id"; 
		return $this->db->select($sql);
	}

	public function getLatestPost($table){
		$sql ="select * from $table order by id desc limit 5";
		return $this->db->select($sql);
	
	}
	public function getPostBySearch($tablePost, $keyword, $cat ){
		if(empty($keyword) && $cat == 0){
			header("Location: ".BASE_URL."/Index/home");
		}
		if(isset($keyword) && !empty($keyword)){
			$sql = "SELECT * FROM $tablePost WHERE title LIKE '%keyword%' OR content LIKE '%keyword%'";
		} elseif(isset($cat)) {
	$sql ="SELECT * FROM $tablePost WHERE cat = $cat";
     } else {
     	$sql = "SELECT * FROM $tablePost WHERE title LIKE '%keyword%' OR content LIKE '%keyword%'";//v27
     }
		
		return $this->db->select($sql);
	}
}

?>