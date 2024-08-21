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

  
  <div class="titles">

    <h2>Code</h2>
    <h2>Name</h2>
    <h2>Info</h2>
    <h2 class="last">Duration</h2>

  
      
</div>

<div class = "parent"> 

<?php foreach($res as $row):?>

  <div class="entry">

  <form method = 'post' action="http://localhost:3000/backend/update.php">
  
  <input type="text" name="code" value=<?=htmlspecialchars($row['code'])?>></input>
  <input type="text" name="name" value=<?=htmlspecialchars($row['name'])?>></input>
  <input type="text" name="info" value=<?=htmlspecialchars($row['info'])?>></input>
  <input type="text" name="duration" value=<?=htmlspecialchars($row['duration'])?>></input>
  <input type="submit" value="update"></input>


  </form>

  <form method='post' action="http://localhost:3000/backend/delete.php">
    
    <input type="text" value=<?=htmlspecialchars($row['code'])?> class="target_id" name="code" ></input> 
    <input type="submit" value="delete" class="del"></input>


  </form>



</div>
<?php endforeach ?>


 
</div>



     
  
  </body>
</html>
