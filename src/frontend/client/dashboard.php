<html>

<head>




</head>



<body>

  <?php

  session_start();

  /*setcookie("name", "jack", time() + 60);*/


  if (isset($_SESSION['EXPIRES']) && time() > $_SESSION['EXPIRES']) {

    echo "<h1> SESSION EXPIRED </h1>";
    session_unset();
    session_destroy();
  } else {

    if (isset($_SESSION['naam'])) {
      echo "<h1> WELCOME " . $_SESSION['naam'] . "</h1>";
    } else {

      echo " <h1>unautherized access</h1>";
      die("ALIEN_ACCESS");
    }
  }




  ?>




</body>



















</html>
