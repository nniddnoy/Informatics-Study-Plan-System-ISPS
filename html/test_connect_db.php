<?php
   $servername = "db";
   $username = "cluster_demo";
   $password = "secret";

   $dbhandle = mysqli_connect($servername, $username, $password);
   $selected = mysqli_select_db($dbhandle, "titanic");
   
   echo "Connected database server<br>";
   echo "Selected database";
?>