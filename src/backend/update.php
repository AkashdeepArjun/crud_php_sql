<?php


require_once './connection.php';


if($_SERVER['REQUEST_METHOD']=='POST'){



  
  $code=$_POST['code'];
  $name=$_POST['name'];
  $info=$_POST['info'];
  $duration=$_POST['duration'];

  try {
  
    $query="UPDATE program SET name=:b,info=:c,duration=:d WHERE code=:q";

  $stmt=$pdo->prepare($query);

  $stmt->bindValue(':q',$_POST['code']);
  $stmt->bindValue(':b',$_POST['name']);
  $stmt->bindValue(':c',$_POST['info']);
  $stmt->bindValue(':d',$_POST['duration']);
  /*$stmt->bindValue(':q',$_POST['code']);*/

  $stmt->execute();

  /*header("Location: http://localhost:3000/frontend/client/CoursesList.php");*/
  
  /*$page=$_SERVER['PHP_SELF'];*/
  /*$sec=0;*/

/*echo "<br/><h1>data updated successfully <br/>";*/
/**/
/*  echo '<br/><script type="text/javascript"> ';*/
/**/
/*  echo "console.log(\"fucking shit\");";*/
/**/
/*  echo "window.location.href=\"/frontend/client/CoursesList.php\" ";*/
  /**/
  /*echo "window.location.replace(\"/frontend/client/CoursesList.php \")";*/

  /*echo "</script>";*/

  /*die();*/
 
  

 /* $delay=0;*/
 /**/
 /* header("refresh:".$delay.";url:".$_SERVER['PHP_SELF']);*/
 /**/
 /* /*exit();*/
 /**/
  /*die(); */

  /*echo "<br/><h1>Data updated successfully</h1>";*/
  /**/
  /**/
  /*/*$delay=1;*/
  /**/
  /*header("Refresh: $delay");*/
  
  echo "<br/> <h1> data updated successfully!!!</h1>";

  /*header("Location: ".$_SERVER['HTTP_REFERER']);*/

  header("location:javascript://history.go(-1)");
  
  echo "<h1>still there </h1>";

  } catch (Exception $e) {

    echo "<h1> FAILED WITH MESSAGE".$e->getMessage()."</h1></br>";
  }





}










?>
