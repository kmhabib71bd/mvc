<?php
//Index Controller
class Post extends DController{
	public function __construct(){
	 parent::__construct();
}

public function postDetails($id){
	$this->load->view("header");


	
	$data = array();
	$tablePost = "post";
	$tableCat = "category";
	$postModel=$this->load->model("PostModel");
	$data['postbyid'] = $postModel->getPostById($tablePost, $tableCat, $id );
	
	$this->load->view("details", $data);
	

	
	$this->load->view("sidebar");
	$this->load->view("footer");
}
public function postBycat($id){
		$this->load->view("header");


	
	$data = array();
	$tablePost = "post";
	$tableCat = "category";
	$postModel=$this->load->model("PostModel");
	$data['getcat'] = $postModel->getPostBycat($tablePost, $tableCat, $id );
	$this->load->view("postbycat", $data);
	$this->load->view("sidebar");
	$this->load->view("footer");
}
}

?>