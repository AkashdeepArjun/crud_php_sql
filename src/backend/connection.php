<?php 


const SERVER_NAME="localhost";

const USER="root";

const DB="test";

const PASS="admin@123";

$pdo=null;

  try {

  /*$connection = new mysqli(SERVER_NAME,USER,PASS);*/

    /*$pdo = new PDO("mysql:host=localhost;dbname=test", 'root', 'admin@123');*/

  
    $HOST="mysql:host=".SERVER_NAME.";dbname=".DB;

    /*echo $conn_string;*/

    $pdo = new PDO($HOST,USER,PASS);

    $pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);

  /*if($connection->connect_error){*/



   echo "<br/> connection setup success <br/> "; 
   /**/
   

  }catch (Exception $ex){
    die("exception caught ".$ex->getMessage());
  }


function greet(){
  echo "<h1>Greetings welcome to php</h1>";

}




?>

