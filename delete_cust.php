<?php
$con = mysqli_connect("localhost","root","","pharmacy");
 $Cust_ID=filter_input(INPUT_POST, 'Cust_ID');
 // $search=filter_input(INPUT_POST, 'search');
if (!$con)
  {
  die('please enter query ' . mysql_error());
  }
// echo $Emp_ID;
// $result = mysqli_query($con,"SELECT User_name FROM employee where Emp_ID='$Emp_ID'");
// while ($row = mysqli_fetch_array($result)) {
// 	$username=$row['User_name'];
// 	echo $username;
// }

// $row=mysqli_fetch_array($result);
// $username=$row['User_name'];
// echo $username;
$sql="delete from customers where Cust_ID='$Cust_ID'";
echo $sql;
if ($con->query($sql)){
    echo "record was deleted sucessfully";
}
 else{
    echo "Error: ". $sql ."<br>". $con->error;
}
// $sql="delete from employee where Emp_ID='$Emp_ID';";
// if ($con->query($sql)){
//     echo "record was deleted sucessfully";
// }
//  else{
//     echo "Error: ". $sql ."<br>". $con->error;
// }
header("location:delete_employee.php");
?>