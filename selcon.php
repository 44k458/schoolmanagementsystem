
<<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title></title>
</head>
<body>











<?php
ini_set('display_errors', 1);
$server="localhost";
$username="root";
$pass="";
$db="crudd";
$roll_number=$_GET['rollnum'];
$classie=$_GET['classie'];
if($conn=mysqli_connect($server,$username,$pass,$db))
{
 if($classie=="science")
  {
       echo "Science chosen!!!";
       $ask = "SELECT * FROM science WHERE roll_number='{$roll_number}';";
       $quer=mysqli_query($conn,$ask);
         if (mysqli_num_rows($quer) > 0) 
          {
          	echo '<table border="4" cellspacing="2" cellpadding="2"> 
            <tr> 
            <td> <font face="Arial">NAME</font> </td> 
            <td> <font face="Arial">ROLL_NUMBER</font></td> 
            <td><font face="Arial">GENDER</font>
            <td> <font face="Arial">SUB1</font> </td> 
            <td> <font face="Arial">SUB2</font> </td> 
            <td> <font face="Arial">SUB3</font> </td> 
            </tr>';
            while($row=mysqli_fetch_assoc($quer))
            {   $one=$row['name'];
      	        $two=$row['roll_number'];
      	        $three=$row['gender'];
      	        $four=$row['Phy'];
      	        $five=$row['Chem'];
      	        $six=$row['Math'];
                echo "<br>";
                echo $one." ";
                echo $two." ";
                echo $three." ";
                echo $four." ";
                echo $five." ";
                echo $six." ";
                echo "<br>";
            } 
            echo '</table>';
          }
          elseif(mysqli_num_rows($quer)==0)
          {
          	echo "<div id='mi'>no records found!!</div>";
          }
   }
   elseif($classie=="commerce")
    {
          echo "commerce chosen!!!";
       $ask = "SELECT * FROM commerce WHERE roll_number='{$roll_number}';";
       $quer=mysqli_query($conn,$ask);
         if (mysqli_num_rows($quer) > 0) 
          {echo '<table border="4" cellspacing="2" cellpadding="2"> 
            <tr> 
            <td> <font face="Arial">NAME</font> </td> 
            <td> <font face="Arial">ROLL_NUMBER</font></td> 
            <td><font face="Arial">GENDER</font>
            <td> <font face="Arial">SUB1</font> </td> 
            <td> <font face="Arial">SUB2</font> </td> 
            <td> <font face="Arial">SUB3</font> </td> 
            </tr>';
            while($row=mysqli_fetch_assoc($quer))
            {   $one=$row['name'];
      	        $two=$row['roll_number'];
      	        $three=$row['gender'];
      	        $four=$row['ACC'];
      	        $five=$row['TAX'];
      	        $six=$row['ECO'];
                echo "<br>";
                echo $one." ";
                echo $two." ";
                echo $three." ";
                echo $four." ";
                echo $five." ";
                echo $six." ";
                echo "<br>";
            } 
            echo '</table>';
          }
          else
          {
          	echo "<div id='mi'>no records found!!</div>";
          }
    }    
    else
    {
             echo "Arts chosen!!!";
       $ask = "SELECT * FROM arts WHERE roll_number='{$roll_number}';";
       $quer=mysqli_query($conn,$ask);
         if (mysqli_num_rows($quer) > 0) 
          {echo '<table border="4" cellspacing="2" cellpadding="2"> 
            <tr> 
            <td> <font face="Arial">NAME</font> </td> 
            <td> <font face="Arial">ROLL_NUMBER</font></td> 
            <td><font face="Arial">GENDER</font>
            <td> <font face="Arial">SUB1</font> </td> 
            <td> <font face="Arial">SUB2</font> </td> 
            <td> <font face="Arial">SUB3</font> </td> 
            </tr>';
            while($row=mysqli_fetch_assoc($quer))
            {   $one=$row['name'];
      	        $two=$row['roll_number'];
      	        $three=$row['gender'];
      	        $four=$row['GEO'];
      	        $five=$row['PS'];
      	        $six=$row['PSY'];
                echo "<tr>";
                echo "<br>";
                echo $one." ";
                echo $two." ";
                echo $three." ";
                echo $four." ";
                echo $five." ";
                echo $six." ";
                echo "<br>";
                echo "<tr>";
            } 
            echo '</table>';
          }

          
          else
          {
          	echo "<div id='mi'>no records found!!</div>";
          }
    }
    }
    else
    {
    	echo "nc";
    }

?>
<html>
<head>
	

<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100&display=swap" rel="stylesheet">



</head>
<style>
*
{
	background-color: black;

    text-align: center;
}
#mi
{

	font-size: 40px;
    font-family:  'Montserrat', sans-serif;
    color: whitesmoke;
    
}
a
{
	text-decoration: none !important;
    color: whitesmoke !important;
	font-size: 10px;	
    background-color: black;
}
button
{
	height: 50px;
	width: 100px;
	font-size: 20px;
	color: whitesmoke;
    border: none;
	background-color: black;
}

</style>
<body><br><button id="gohome"><a href="http://localhost/crudapp/crudapp.html">GO BACK HOME</button><br>
<button id="fetchpage"><a href="http://localhost/crudapp/fetch.html">GO TO FETCH</button></body>
<!-- 
<a href="http://localhost/crudapp/frontpage.html">GO BACK HOME</a>
 -->

</html>