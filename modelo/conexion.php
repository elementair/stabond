<?php
# FileName="Connection_php_mysql.htm"
# Type="MYSQL"
# HTTP="true"
/* php 5.6*/
$hostname = "localhost";
$database = "portafolio_creactiv_creactiv";
$username = "root";
$password = "";

// $hostname = "localhost";
// $database = "creactiv_creactivmedia";
// $username = "creactiv_admin";
// $password = "_25xcT&v2095@";

$con=mysqli_connect($hostname,$username,$password,$database);
// Check connection
if (mysqli_connect_errno()){
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }else{
  //	echo "conexion exitosa";
  }




?> 