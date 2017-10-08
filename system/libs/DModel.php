<?php
class DModel {
	protected $db = array();
	public function __construct(){
		$dsn = 'mysql:dbname=db_mvc; host=localhost';
		$user = 'root';
		$pass = '';
		$this->db = new Database($dsn,$user,$pass); //ekhane $db array er moddhe Database() shob info store kore rakha hoecha.
	}
}


?>
<?php
// // main model
// class DModel{
// 	protected $db = array();
// 	public function __construct(){
//      $dsn = 'mysql:dbname=db_mvc; host=localhost';
// 	$user = 'root';
// 	$pass = '';
//     $this->db = new Database($dsn,$user,$pass);
// 	}
// }



?>