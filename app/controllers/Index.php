<?php
//Index Controller
class Index extends DController{
	public function __construct(){
	 parent::__construct();

	}
public function home(){
	$this->load->view("header");
	$this->load->view("content");
	$this->load->view("sidebar");
	$this->load->view("footer");
	

	

}


}

?>


<?php
//Index Controller
// class Index extends DController{
// 	public function __construct(){
// 		parent::__construct();

// 	}
// public function home(){
	
// 	$this->load->view("home");

// }
	
// public function category(){
// 	$data = array();
// 	$table = "category";
// 	$catModel=$this->load->model("CatModel");
// 	$data['cat']=$catModel->catList($table);
// 	$this->load->view("category", $data);
// //ekhane view function category page thake show korbe jar moddhe thake $data list, orthat CatModel thake List gulo category page a  chole ashbe.
// // ekhane view dara view page a dekhabe. $data jabe views er category.php r.

// }

// public function catById(){
// 	$data = array();
// 	$table = "category";
// 	$id = '1';
// 	$catModel=$this->load->model("CatModel");
// 	$data['catbyid']=$catModel->catById($table, $id);
// 	$this->load->view("catbyid", $data);
// }
// public function addCategory(){
// 	$this->load->view("addCategory");
// }
// public function insertCategory(){
// 	$table = "category";
// 	$data = array (
// 		'name' => 'technology',//key=>value
// 		'title' => 'Technology'
// 	);
// 	$catModel = $this->load->model("CatModel");
// 	$catModel->insertCat($table, $data);
// }

// }

 
?>