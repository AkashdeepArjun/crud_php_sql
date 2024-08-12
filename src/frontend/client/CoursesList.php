<!DOCTYPE html>

<?php

require_once realpath($_SERVER['DOCUMENT_ROOT']).'/backend/connection.php';

$query = "SELECT * FROM program";

$stmt=$pdo->prepare($query);

$stmt->execute();

$res=$stmt->fetchall(PDO::FETCH_ASSOC);

?>








<html lang="en">
  <head>
    <meta charset="UTF-8">
    <!--<meta name="viewport" content="width=device-width, initial-scale=1">-->
    <title>Courses Offered </title>
    <link href="../css/CoursesList.css" rel="stylesheet">


  </head>
  <body>





    <table>
      
      <thead>
      
        <tr class="head titles">

          <td>Code</td>
          <td>Name</td>
          <td>Info</td>
          <td>Duration</td>


        </tr>

      </thead>

      <tbody>
       
        /*OBJECTIVE:reload data once data is updated or deleted */

<?php foreach($res as $row):?>
  <tr>

    <td>
<input type="text" value=<?= htmlspecialchars($row['code']) ?>></input></td>
    <td><input type="text" value=<?=htmlspecialchars($row['name']) ?>></input></td>
    <td><input type="text" value=<?=htmlspecialchars($row['info']) ?>></input></td>
    <td><input type="text" value=<?=htmlspecialchars($row['duration']) ?>></input></td>
  <td class='edit'>Update</td>
  <td class='edit'>Delete</td> 

  </tr>
</form>
<?php endforeach ?>
           
          

     

      </tbody>


    </table>    
  
  </body>
</html>
