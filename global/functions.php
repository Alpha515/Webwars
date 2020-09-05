 <?php
    $con = mysqli_connect("localhost","username","password","DB_NAME");
     mysqli_set_charset($con,"utf8");
                             
 if (mysqli_connect_errno()){
   echo "Problem connecting to MySQL database: " . mysqli_connect_error();
  }
?>
