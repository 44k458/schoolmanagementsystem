<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title></title>
	<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100&display=swap" rel="stylesheet">


</head>

<style>
body
{
  font-size: 30px;
  background-color: black;
  color: whitesmoke;
  font-family: 'Montserrat', sans-serif;
}
table
{
	border: solid 1px whitesmoke;
}
a
{
	text-decoration: none;
	color: whitesmoke;
}
</style>
<body>



<div id="star">

<?php
ini_set('display_errors', 1);

$server="localhost";
$username="root";
$password="";
$db="crudd";
$conn=mysqli_connect($server,$username,$password,$db);

if($conn)
{
	 $askarts = "SELECT * FROM arts;";
       $quer=mysqli_query($conn,$askarts);
         if (mysqli_num_rows($quer) > 0) 
          {
          	echo "<b>Below details are for arts class</b>";
          	echo '<table><tr><td>NAME</td><td>ROLL NUMBER</td><td>GENDER</td><td>GEO</td><td>PSY</td><td>PS</td>'; 
            while($row=mysqli_fetch_assoc($quer))
            {   
 
            	$one=$row['name'];
      	        $two=$row['roll_number'];
      	        $three=$row['gender'];
      	        $four=$row['GEO'];
      	        $five=$row['PS'];
      	        $six=$row['PSY'];
                          echo "<tr><td>";
                           echo "<br>";
                              echo $one." ";
                          echo "</td>";

                                                    echo "<td>";
                           echo "<br>";
                              echo $two." ";
                          echo "</td>";

                          echo "<td>";
                           echo "<br>";
                              echo $three." ";
                          echo "</td>";

                          echo "<td>";
                           echo "<br>";
                              echo $four." ";
                          echo "</td>";

                          echo "<td>";
                           echo "<br>";
                              echo $five." ";
                          echo "</td>";

                          echo "<td>";
                           echo "<br>";
                              echo $six." ";
                          echo "</td></tr>";

                          













                //          echo $two." ";
                // echo $three." ";
                // echo $four." ";
                // echo $five." ";
                // echo $six." ";
                // echo "<br>";
            } 
            echo '</tr></table>';
          }
          	 $askcom = "SELECT * FROM commerce;";
       $quer=mysqli_query($conn,$askcom);
         if (mysqli_num_rows($quer) > 0) 
          {echo "<b>Below details are for commerce class</b>";

           
            echo '<table><tr><td>NAME</td><td>ROLL NUMBER</td><td>GENDER</td><td>ACC</td><td>TAX</td><td>ECO</td>'; 
           
 
            while($row=mysqli_fetch_assoc($quer))
            {   $one=$row['name'];
      	        $two=$row['roll_number'];
      	        $three=$row['gender'];
      	        $four=$row['ACC'];
      	        $five=$row['TAX'];
      	        $six=$row['ECO'];

               
                          echo "<tr><td>";
                          // echo "<br>";
                              echo $one." ";
                          echo "</td>";

                          echo "<td>";
                           // echo "<br>";
                              echo $two." ";
                          echo "</td>";

                          echo "<td>";
                           // echo "<br>";
                              echo $three." ";
                          echo "</td>";

                          echo "<td>";
                           // echo "<br>";
                              echo $four." ";
                          echo "</td>";

                          echo "<td>";
                           // echo "<br>";
                              echo $five." ";
                          echo "</td>";

                          echo "<td>";
                           // echo "<br>";
                              echo $six." ";
                          echo "</td></tr>";

                          









                // echo "<br>";
                // echo $one." ";
                // echo $two." ";
                // echo $three." ";
                // echo $four." ";
                // echo $five." ";
                // echo $six." ";
                // echo "<br>";
            } 
            echo '</table>';
          }
	 $asksci = "SELECT * FROM science;";
       $quer=mysqli_query($conn,$asksci);
         if (mysqli_num_rows($quer) > 0) 
         {echo "<b>Below details are for science class</b>";


            echo '<table><tr><td>NAME</td><td>ROLL NUMBER</td><td>GENDER</td><td>PHYSICS</td><td>CHEMISTRY</td><td>MATHS</td>'; 


            while($row=mysqli_fetch_assoc($quer))
            {   $one=$row['name'];
      	        $two=$row['roll_number'];
      	        $three=$row['gender'];
      	        $four=$row['Phy'];
      	        $five=$row['Chem'];
      	        $six=$row['Math'];


                                          echo "<tr><td>";
                          // echo "<br>";
                              echo $one." ";
                          echo "</td>";

                          echo "<td>";
                           // echo "<br>";
                              echo $two." ";
                          echo "</td>";

                          echo "<td>";
                           // echo "<br>";
                              echo $three." ";
                          echo "</td>";

                          echo "<td>";
                           // echo "<br>";
                              echo $four." ";
                          echo "</td>";

                          echo "<td>";
                           // echo "<br>";
                              echo $five." ";
                          echo "</td>";

                          echo "<td>";
                           // echo "<br>";
                              echo $six." ";
                          echo "</td></tr>";

            } 
            echo '</table>';
          }



}
else
{
	echo "nc";
}
?>


<a href="http://localhost/crudapp/frontpage.html">GO BACK HOME</a>


</div>
</body>
</html>
