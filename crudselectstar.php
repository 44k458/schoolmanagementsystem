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
a
{
  text-decoration: none;
  color: whitesmoke;
  font-size: 50px;
}
body
{
  background-color: black;
  color: whitesmoke;
  font-family: 'Montserrat', sans-serif;
}
#datadisp
{
  font-size: 30px;
}
}
}

</style>
<body>
<?php
ini_set('display_errors', 1);

$server="localhost";
$username="root";
$password="";
$db="crudd";
$conn=mysqli_connect($server,$username,$password,$db);

$name=$_GET['students_name'];
$gender=$_GET['gender'];
$roll_number=$_GET['roll_number'];
$result=$_GET['result'];
$classie=$_GET['classos'];?>
<div id="datadisp">
<?php echo $name."<br>";
echo $gender."<br>";
echo $roll_number."<br>";
echo $result."<br>";
echo $classie."<br>";
  if($conn)
 {
       if($classie=="science")
       {
          // echo "science chosen";

        $physmark=$_GET['phy'];
        $chemmark=$_GET['chem'];
        $mathsmark=$_GET['math'];

         $data="insert into science values('$name','$roll_number','$gender','$physmark','$chemmark','$mathsmark');";
          $exe=mysqli_query($conn,$data);
          if($exe)
          {
            echo "mission successful!!";
          }else
          {
            $checkno=mysqli_errno($conn);
            if($checkno=1062)
            {
              echo "Duplicate number entered!!";
            }
          }
        }
     elseif($classie=="commerce")
       { 
        
        $acc=$_GET['acc'];
        $tax=$_GET['tax'];
        $eco=$_GET['eco'];
        echo $acc."<br>";
               echo $tax."<br>";
                      echo $eco."<br>";
          $data="insert into commerce values('$name','$roll_number','$gender','$acc','$tax','$eco');";
          $exe=mysqli_query($conn,$data);
          if($exe)
          {
            echo "mission successful!!";
          }else
          {
            echo "Error ".mysqli_errno($conn);
          }
       
       } 
       elseif($classie=="arts")
       {
        $geo=$_GET['geo'];
        $psy=$_GET['psy'];
        $polsci=$_GET['polsci'];

         echo $geo."<br>";
         echo $psy."<br>";
         echo $polsci;



        $data="insert into arts values('$name','$roll_number','$gender','$geo','$psy','$polsci');";
        $exe=mysqli_query($conn,$data);
        if($exe)
        {
          echo "mission successful!!";
        }
        else
        {
          echo "Error ".mysqli_error($conn);
        }


       }
       else
       {
        echo "problem!!".mysqli_error($conn);
       }
}    
    else
    {
      echo mysqli_error($conn);
    }

echo '</div>';
?>

<a href="http://localhost/crudapp/frontpage.html">GO BACK HOME</a>

</body>
</html>
