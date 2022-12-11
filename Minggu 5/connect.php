<?php 
 
 $konek = mysqli_connect("localhost","root","","data");
  
 // Check connection
 if (mysqli_connect_errno()){
    die("Connection failed : " . $konek->connect_error);
 }
  
 ?>