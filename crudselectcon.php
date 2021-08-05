<?php
ini_set('display_errors', 1);
$server="localhost";
$username="root";
$pass="";
$db="crudd";
	$roll_num=$_GET['roll'];
	echo $roll_num;
// if($conn=mysqli_connect($server,$username,$pass,$db))


// echo "hello there,we are connected!!!";
  // $ask="SELECT * FROM  students where roll_number='".$roll_num."';";
  // $quer=mysqli_query($conn,$ask);
  // if (mysqli_num_rows($quer) > 0) 
  // {

  //    echo '<table border="4" cellspacing="2" cellpadding="2"> 
  //     <tr> 
  //         <td> <font face="Arial">NAME</font> </td> 
  //         <td> <font face="Arial">GENDER</font> </td> 
  //         <td> <font face="Arial">ROLL NUMBER</font> </td> 
  //         <td> <font face="Arial">RESULT</font> </td> 

  //     </tr>';

  //     while ($row = mysqli_fetch_assoc($quer)) {
  //       $field1name = $row["name"];
  //       $field2name = $row["gender"];
  //       $field3name = $row["roll_number"];
  //       $field4name = $row["result"]; 

  //       echo '<tr> 
  //                 <td>'.$field1name.'</td> 
  //                 <td>'.$field2name.'</td> 
  //                 <td>'.$field3name.'</td> 
  //                 <td>'.$field4name.'</td> 
  //             </tr>';
  //   }
  //   echo '</table>';}
//}
// else
// {
// echo "No connection!!".mysqli_connect_error();
// }
?>