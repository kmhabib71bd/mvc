<?php
//Index Controller
class Index extends DController{
	public function __construct(){
	 parent::__construct();

	}
public function home(){
	$data = array();
	$tablePost = "post";
	$tableCat = "category";
	$this->load->view("header");
//search
	

	
	$catModel=$this->load->model("CatModel"); //ekhane Load.php file hote Object return korbe.
	//model ekbar declare korle hoe jabe.
	// $catModel->catList();
	$data['catlist'] = $catModel->catList($tableCat);//
	$this->load->view("search",$data);
//from category controller

	$postModel=$this->load->model("PostModel");
	$data['allPost'] = $postModel->getAllPost($tablePost);
	$this->load->view("content", $data);
	

	// $catModel=$this->load->model("CatModel"); //ekhane Load.php file hote Object return korbe.
	// $catModel->catList();
	// $data['catlist'] = $catModel->catList($tableCat);
 $data['latestPost'] = $postModel->getLatestPost($tablePost);

	$this->load->view("sidebar", $data);


	$this->load->view("footer");
	

	

}
public function postDetails(){
	$this->load->view("header");
	$this->load->view("details");
	

	
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