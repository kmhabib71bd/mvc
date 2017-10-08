<?php
class Category extends DController{
	public function __construct(){
		parent::__construct();
	}
	public function categoryList(){
	$data = array();
	$table = "category";
	$catModel=$this->load->model("CatModel"); //ekhane Load.php file hote Object return korbe.
	// $catModel->catList();
	$data['cat'] = $catModel->catList($table);//ekhane cat ta index holeo param er moto kaaz korbe
	$this->load->view("category", $data );
	// include 'app/controllers/index.php?url='.$url[1]().'.php';

}
public function catById(){
	$data = array();
	$table = "category";
	$id = '2';
	$catModel=$this->load->model("CatModel");
	$data['catbyid']=$catModel->catById($table, $id);
	$this->load->view("catbyid", $data);
}
// public function addCategory(){
// 	$this->load->view("addCategory");
// }
 public function addCategory(){ //action kora hoecha insertCategory() methode
	$this->load->view("addCategory");
}
public function insertCategory(){
	$table = "category";
	$name = $_POST['name'];
	$title = $_POST['title'];

	$data = array (
		'name' => $name,//key=>value
		'title' => $title
	);
	$catModel = $this->load->model("CatModel");
	$result = $catModel->insertCat($table, $data);
	$mdata = array();
	if ($result){
		$mdata['msg']= "Name and title inserted into database";
	}else{
		$mdata['msg']= "Name and title inserted into database";
	}
	$this->load->view("addCategory", $mdata);
}

}

?>