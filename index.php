


<?php
spl_autoload_register(function($class){
	 include_once "system/libs/".$class.".php";
});
	// include_once "app/controllers/post.php";
	 include_once "app/config/config.php";
 // include_once "system/libs/Main.php";
 // include_once "system/libs/DController.php";
 //  include_once "system/libs/Load.php";
 //    include_once "system/libs/DModel.php";
 //      include_once "system/libs/Database.php";


 $url = isset($_GET['url']) ? $_GET['url'] : NULL ;//turnary operator = if statement er short form.

  //ekhane index.php?url=km/habib/ullah ekhane km/habib/ullah holo 'url' er value 'url=' ekhane km/habib/ullah = controller/method/parameter

//ekhane url a value pale $_GET['url'] return korbe onnothai NULL return korbe. NuLL ekti data type eta zero na, emptyo nah.
if($url != NULL){
$url = rtrim($url, '/'); // '/' er dan pashe ja pabe shob guloke remove kore nibe.
 $url = explode("/", filter_var($url, FILTER_SANITIZE_URL));
}else{
	unset($url); //url ka unset kore dibe
}

 
if (isset($url[0])){
	include 'app/controllers/'.$url[0].'.php';
	$ctrl = new $url[0]();
	if(isset($url[2])){
		$ctrl->$url[1]($url[2]);
	}else{
		if(isset($url[1])) {
			$ctrl->$url[1]();
		}else{
			#code...
		}

	}
}else{
  	include 'app/controllers/index.php';
  		$ctrl = new Index();
  		$ctrl->home();
}

 

 //ekhane method, param gulor url thake ashe Dolwar class a jahan matheod a pass hochche.
 //    [0] => controller
 //    [1] => method
 //    [2] => param
// $controller =$url[0]."<br/>";
// $method =$url[1]."<br/>";
// $param =$url[2]."<br/>";
// echo $controller;
// echo $method;
// echo $param;
?>





















<?php 
// include_once "system/libs/Main.php";
// include_once "system/libs/DController.php";
// include_once "system/libs/DModel.php";
// include_once "system/libs/Database.php";
// include_once "system/libs/Load.php";
// spl_autoload_register(function($class){
// 	include_once "system/libs/".$class.".php";
// });
// $url = isset($_GET['url']) ? $_GET['url'] : NULL;
// if($url != NULL){
// 	$url = rtrim ($url, '/');
// 	$url = explode("/", filter_var($url, FILTER_SANITIZE_URL));
// } else {
// 	unset($url);
// }
// if(isset($url[0])) { 
// 	include 'app/controllers/'.$url[0].'.php';
// 	$ctlr = new $url[0]();
// 	if(isset($url[2])){
// 		$ctlr->$url[1]($url[2]);
// 	}else{
// 		if(isset($url[1])){
// 			$ctlr->$url[1]();
// 		}else{

// 		}

// 	}
// } else {
// 	include 'app/controllers/Index.php';
// 	$ctlr = new Index();

// 	$ctlr->category();
// }


?>

<!--url hoy lcalhost/mvc/(controller er controler naam jemon index)index/(erpor index controler moddhe mehtoder naam)category.
//index.php?url=  er link ti .htaccess er maddhome rule kore hide kora hoycha. fole www.localhost/mvc/index.php?url=index/category lekhar poriborthe likhte hoy localhost/mvc/index/category.
//11 line info-ekhane $url[0] er ortho controler naam jemon Delowar ba index. $url[1] mean controller vitor classer naam. ($url[2]) etar ortho classer vetor methoder naam --> 