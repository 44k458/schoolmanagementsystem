<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>TEACHERS PAGE</title>

<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100&display=swap" rel="stylesheet">

<style type="text/css">
	
*
{
	background-color: black;
	margin: 0px 0px 0px 0px;
	text-align: center;
}
a
{
	text-decoration: none;
	color: whitesmoke;
	font-size: 40px;
	font-family: font-family:  'Montserrat', sans-serif;;
}
#mi
{
	font-size: 50px;
	color: whitesmoke;
font-family:  'Montserrat', sans-serif;
    border: 1px solid whitesmoke;
}


</style>


<body>

<div id="showresult">






<?php

ini_set('display_errors', 1);
$server="localhost";
$username="root";
$pass="";
$db="crudd";
$roll_number=$_GET['rollnum'];
$classie=$_GET['classie'];


           // echo $roll_number;
           // echo $classie;

if($conn=mysqli_connect($server,$username,$pass,$db))
{
   if($classie=="comm")
       { 

          
        
        // $acc=$_GET['acc'];
        // $tax=$_GET['tax'];
        // $eco=$_GET['eco'];
        // echo $acc."<br>";
        //        echo $tax."<br>";
        //               echo $eco."<br>";
          $data="delete from  commerce where roll_number='".$roll_number."';";
          $exe=mysqli_query($conn,$data);
          if($exe)
          {
            echo "mission successful!!";
          }else
          {
            echo "Error ".mysqli_error($conn);
          }
       
       }
       elseif($classie=='Sci')
       {
          $data="delete from  science where roll_number='".$roll_number."';";
          $exe=mysqli_query($conn,$data);
          if($exe)
          {

                   
            echo "<div id='mi'>mission successful!!</div>";
          }else
          {
            echo "Error ".mysqli_error($conn);
          }
       }
       elseif($classie=='art')
       {
          $data="delete from  science where roll_number='".$roll_number."';";
          $exe=mysqli_query($conn,$data);
          if($exe)
          {
            echo "mission successful!!";
          }else
          {
            echo "Error ".mysqli_error($conn);
          }
       }

}

?>




<a href="http://localhost/crudapp/frontpage.html">GO BACK HOME</a>

</div>

</body>
</head>