<?php
//Index Controller
class Post extends DController{
	public function __construct(){
	 parent::__construct();
}

public function postDetails($id){
	$this->load->view("header");
	$this->load->view("search");


	
	$data = array();
	$tablePost = "post";
	$tableCat = "category";
	$postModel=$this->load->model("PostModel");
	$data['postbyid'] = $postModel->getPostById($tablePost, $tableCat, $id );
	
	$this->load->view("details", $data);
	

	$catModel=$this->load->model("CatModel"); //ekhane Load.php file hote Object return korbe.
	// $catModel->catList();
	$data['catlist'] = $catModel->catList($tableCat);
 $data['latestPost'] = $postModel->getLatestPost($tablePost);
	$this->load->view("sidebar", $data);
	$this->load->view("footer");
}


public function postBycat($id){
		$this->load->view("header");
		$this->load->view("search");


	
	$data = array();
	$tablePost = "post";
	$tableCat = "category";
	$postModel=$this->load->model("PostModel");
	$data['getcat'] = $postModel->getPostBycat($tablePost, $tableCat, $id );
	$this->load->view("postbycat", $data);

	$tableCat = "category";
	$catModel=$this->load->model("CatModel"); //ekhane Load.php file hote Object return korbe.
	// $catModel->catList();
	$data['catlist'] = $catModel->catList($tableCat);
 $data['latestPost'] = $postModel->getLatestPost($tablePost);
	$this->load->view("sidebar", $data);
	
	$this->load->view("footer");
}
}

?>