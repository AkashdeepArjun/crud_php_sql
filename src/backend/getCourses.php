<?php

  require_once './connection.php';


if($_SERVER['REQUEST_METHOD']=='POST'){



  
  $code=$_POST['code'];
  $name=$_POST['name'];
  $info=$_POST['info'];
  $duration=$_POST['duration'];

echo "1==> ".$code."<br/> 2==> ".$name."<br/> 3==> ".$info."<br/> 4==> ".$duration;


try{
  $query= "INSERT INTO program(code,name,info,duration) VALUES(:c,:n,:i,:d); ";


  $stmt=$pdo->prepare($query);

  $stmt->bindValue(':c',$_POST['code']);
  $stmt->bindValue(':n',$_POST['name']);
  $stmt->bindValue(':i',$_POST['info']);
  $stmt->bindValue(':d',$_POST['duration']);
  /**/
  /**/
  /**/
  $stmt->execute();
  /**/
  echo "<h1>added course successfully!!!</h1>";

}catch(Exception $e){

  echo " <br/> EXCEPTION OCCURED :".$e->getMessage()."at LINE".$e->getLine();
}


}









?>
