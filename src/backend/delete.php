<?php



 require_once './connection.php';


if($_SERVER['REQUEST_METHOD']=='POST'){

  
  $query="DELETE from program where code=:id";

  try {
    

    $statement= $pdo->prepare($query);
    $statement->bindValue(':id',$_POST['code']);

    $statement->execute();

    /*header("location:javascript://history.go(-1)");*/ 
    
    header("location:".$_SERVER['HTTP_REFERER']);
    exit();
    
    /*header("location:javascript://history.o(-1)");*/
    echo "<h1>data deletion success </h1>";
  } catch (Exception $e) {
  
    echo "<script type=\"text/javascript\" >";
    
      echo "window.alert(\"error\");";    
      
      echo "</script>";
      


    echo "<h1>".$e->getMessage()."</h1>";
  }



}







?>
