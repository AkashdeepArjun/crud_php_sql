
<?php

if($_SERVER['REQUEST_METHOD']=='POST'){

  
  $dir = '/home/akashdeep/Projects/phpProjects/mysqlCrud/src/uploads/';
$uploadfile = $dir . basename($_FILES['userfile']['ufile']);

try {


    if(move_uploaded_file($_FILES['userfile']['tmp_name'],$uploadfile)){


      echo "<h1>file uploaded </h1>";

    }else{

      echo "<h1>possibly error </h1>";



    echo "here are FILS info";

    print_r($_FILES);
      http_response_code(500);
      exit('FAILED ');
    }







} catch (Exception $th) {

    echo "<h1>Exception got".$th->getMessage()."</h1>";
}
 

}



?>
