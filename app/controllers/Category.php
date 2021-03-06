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


 public function updateCategory(){ 

	$table = "category";
	$id = '13';
	$catModel=$this->load->model("CatModel");
	$data = array();
	$data['catById']=$catModel->catById($table, $id);
	$this->load->view("catupdate", $data);

	
}

public function updateCat(){
$table = "category";

$id = $_POST['id'];
$name = $_POST['name'];
$title = $_POST['title'];
$cond = "id=$id";
	$data = array (
		'name' => $name,//key=>value
		'title' => $title
	);
$catModel = $this->load->model("CatModel");
$result = $catModel->catUpdate($table,$data,$cond);
if ($result){
		$mdata['msg']= "Name and title updated into database";
	}else{
		$mdata['msg']= "Name and title not updated into database";
	}
	$this->load->view("catupdate", $mdata);

}
public function deleteCatById(){
	$table = "category";
	$cond = "id=2";
	$catModel = $this->load->model("CatModel");
$catModel->delCatById($table,$cond);
}
public function search(){
	$data = array();
	$keyword = $_REQUEST['keyword'];
	$cat = $_REQUEST['cat'];
	$tablePost = "post";
	$tableCat = "category";
	$this->load->view("header");

	$catModel=$this->load->model("CatModel"); 

	//search.php
	$data['catlist'] = $catModel->catList($tableCat);//
	$this->load->view("search",$data);

	//postbycat.php
	$postModel=$this->load->model("PostModel");
	$data['postbysearch'] = $postModel->getPostBySearch($tablePost, $keyword, $cat );
	$this->load->view("sresult", $data);

//sidebar.php
	// $data['catlist'] = $catModel->catList($tableCat);
 $data['latestPost'] = $postModel->getLatestPost($tablePost);
	$this->load->view("sidebar", $data);
	
	$this->load->view("footer");
}
}

?>