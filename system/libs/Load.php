<?php
class Load {
	function __construct(){}
		public function view($fileName, $data = false){
			if($data == true){//jodi data index controller hote data variable a kichu thake
				extract($data);
			}
			include 'app/views/'.$fileName.'.php';
		}
	public function model($modelName){
		include 'app/models/'.$modelName.'.php';
		return new $modelName;
	}
}

?>
<?php
// class Load {
// 	function __constuct(){

// 	}
// 	public function view($fileName, $data = false){
// 		if($data == true){
// 			extract($data);
// 		}
// 		include 'app/views/'.$fileName.'.php';
// 	}
// 	public function model($modelName){
// 	   include 'app/models/'.$modelName.'.php';
// 		return new $modelName();

// 	}

// }

?>