<?php

session_start();
$_SESSION['CREATED'] = time();

$_SESSION['EXPIRES'] = $_SESSION['CREATED'] + 60;

include_once './db_connection.php';




if ($_SERVER['REQUEST_METHOD'] == 'POST') {



  try {

    $uname = $_POST['username'];
    $upass = $_POST['userpass'];

    $query = "select * from users WHERE name=:n and password=:p";


    $stmt = $pdo->prepare($query);

    $stmt->bindValue(':n', $uname);

    $stmt->bindValue(':p', $upass);


    $stmt->execute();


    $user = $stmt->fetchall(PDO::FETCH_OBJ);

    if ($user == null) {
      echo "<h1> No such user exist </h1>";
      http_response_code(400);
      die("REQUEST FAILED");
    } else {
      $user_obj = json_encode($user);

      /*var_dump($user_obj['id']);*/
      /*echo "lol name is " . $user_obj . name;*/
      /*setcookie("name", "spidey", time() + 3600);*/
      /**/
      /*echo "<h1> Cookie set to " . $_COOKIE["name"] . "</h1>";*/


      session_set_cookie_params(

        [


          'lifetime' => 1,
          'path' => '/',
          'secure' => true,
          'httponly' => true,
          'samesite' => 'Strict',
          'domain' => $_SERVER['HTTP_HOST']








        ]
      );

      $_SESSION["naam"] = $user[0]->name;




      echo "username set to " . "<h1>" . $_SESSION["naam"] . "</h1>";

      header("location:http://localhost:3000/frontend/client/dashboard.php");
      exit();
    }
  } catch (Exception $exc) {



    echo "<h1> Exception occured " . $exc->getMessage() . "</h1>";
  }
}
