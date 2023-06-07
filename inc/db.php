<?php 

class dbcontroller{
	private $con;

	public function __construct(){
        $this->con = $this->database_connection();

	}

    public function database_connection(){
        define("HOSTNAME","localhost");
        define("USERNAME","root");
        define("PASSWORD","");
        define("DBNAME","su1");

        $db = mysqli_connect(HOSTNAME,USERNAME,PASSWORD,DBNAME);

        if($db){
            echo "database connected";
        }

        return $db;
    }
}



 ?>