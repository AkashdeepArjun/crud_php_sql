<html>

<head>

  <title>File upload demo </title>

  <link rel="stylesheet" href="">

</head>



<body>


  <form enctype="multipart/form-data" action="http://localhost:3000/backend/reciever.php" method='post'>
    <input type="hidden" name="MAX_FILE_SIZE" value="40000" />
    <input type="file" name="ufile">
    <input type="submit" value="submit file">

  </form>



</body>









</html>
