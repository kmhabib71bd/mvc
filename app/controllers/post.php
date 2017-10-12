<?php
//Index Controller
class Post extends DController{
	public function __construct(){
	 parent::__construct();
}

public function postDetails($id){
	$data = array();
	$tablePost = "post";
	$tableCat = "category";
	$this->load->view("header");
	$catModel=$this->load->model("CatModel");

	//search.php
	$data['catlist'] = $catModel->catList($tableCat);//
	$this->load->view("search",$data);

//details.php
	$postModel=$this->load->model("PostModel");
	$data['postbyid'] = $postModel->getPostById($tablePost, $tableCat, $id );
	$this->load->view("details", $data);

	 //sidebar.php
	$data['catlist'] = $catModel->catList($tableCat);
 $data['latestPost'] = $postModel->getLatestPost($tablePost);
	$this->load->view("sidebar", $data);
	$this->load->view("footer");
}


public function postBycat($id){
	$data = array();
	$tablePost = "post";
	$tableCat = "category";
	$this->load->view("header");

	$catModel=$this->load->model("CatModel"); 

	//search.php
	$data['catlist'] = $catModel->catList($tableCat);//
	$this->load->view("search",$data);

	//postbycat.php
	$postModel=$this->load->model("PostModel");
	$data['getcat'] = $postModel->getPostBycat($tablePost, $tableCat, $id );
	$this->load->view("postbycat", $data);

//sidebar.php
	$data['catlist'] = $catModel->catList($tableCat);
 $data['latestPost'] = $postModel->getLatestPost($tablePost);
	$this->load->view("sidebar", $data);
	
	$this->load->view("footer");
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