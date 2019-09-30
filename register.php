<<?php 

// session_start();

// $con = mysqli_connect('localhost','root','123456')
// mysqli_select_db($con,'fyp2');
// $name = $_POST[User];
// $pass = $_POST[password];

// $s = "select * from usertable where name = '$name' ";
// $result = mysqli_query($con , $s);
// $num = mysqli_num_rows($result);

// if ($num == 1) {
// 	echo "user name already taken";
// }else{
// 	$reg = "insert into usertable(name,password) values('$name','$pass')"
// 	mysqli_query($con,$reg);
// 	echo "Registration successful";
// }


 $servername = "localhost";
$username = "username";
$password = "password";

// Create connection
$conn = new mysqli($servername, $username, $password);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully";
?>