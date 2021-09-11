<?php
// phpinfo();
if(isset($_POST['FullName'])){
$server = "localhost";
$username = "root";
$password = "";

$con = mysqli_connect($server,$username,$password,"form");

if(!$con){
    die("connection failed".mysqli_connect_error());
}
//echo"sucess connecting to db";
$FullName = $_POST['FullName'];
$PhoneNumber = $_POST['phone'];
$EmailAddress = $_POST['email'];
$Message = $_POST['message'];
echo  $FullName;
// exit();
$sql = "INSERT INTO `form` ( `name`, `phone`, `email`, `message`, `dt`) VALUES ('$FullName', '$PhoneNumber', '$EmailAddress', '$Message', current_timestamp())";
if($con->query($sql) == true){
    echo "Sucessfully inserted";
}
else{
    echo "ERROR: $sql <br> $conn->error";
}
$con->close();
}
else{
    echo "Sucessfully inserted";
}


?>