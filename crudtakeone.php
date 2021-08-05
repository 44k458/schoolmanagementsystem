<?php
ini_set('display_errors', 1);
// echo "hello world";
// if(isset($_GET['submit']))
// {

$name=$_GET['students_name'];
$gender=$_GET['gender'];
$roll_number=$_GET['roll_number'];
$result=$_GET['result'];
echo $name."<br>";
echo $gender."<br>";
echo $roll_number."<br>";
echo $result."<br>";

$server="localhost";
$username="root";
$password="";
$db="crudd";
$conn=mysqli_connect($server,$username,$password,$db);

	if($conn)
	{
		// insert into students values('$name','$gender','$roll_number','$result');
      // $seldb="use crudd;";
      // $quer=";
      // $exe=mysqli_query($conn,"select * from students;");
      // echo mysqli_num_rows($exe);
  //     // echo mysqli_free_result($exe);
  //     if ($result = mysqli_query($conn, "SELECT * FROM students;")) {
  // echo "Returned rows are: " . mysqli_num_rows($result);
  // // Free result set
  // mysqli_free_result($result);
// } 








// $sql="insert into students values ('$name','$gender',$roll_number,'$result');";
// $res=mysqli_query($conn,$sql);














      $sql = "SELECT * FROM students;";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) 
{

  echo '<table border="4" cellspacing="2" cellpadding="2"> 
      <tr> 
          <td> <font face="Arial">NAME</font> </td> 
          <td> <font face="Arial">GENDER</font> </td> 
          <td> <font face="Arial">ROLL NUMBER</font> </td> 
          <td> <font face="Arial">RESULT</font> </td> 

      </tr>';

    while ($row = mysqli_fetch_assoc($result)) {
        $field1name = $row["name"];
        $field2name = $row["gender"];
        $field3name = $row["roll_number"];
        $field4name = $row["result"]; 

        echo '<tr> 
                  <td>'.$field1name.'</td> 
                  <td>'.$field2name.'</td> 
                  <td>'.$field3name.'</td> 
                  <td>'.$field4name.'</td> 
              </tr>';
    }
    echo '</table>';

} else {
  echo "0 results";
}

  

	}
	else
	{
		echo "not connected!!".mysqli_connect_error();
	}

?>