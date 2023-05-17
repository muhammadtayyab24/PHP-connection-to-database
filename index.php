<?php


// Database username password variables.
$server = "localhost";
$username = "root";
$password = "";
$dbName = "db-lab-5";



// connection with PHP variable
$Conn = mysqli_connect($server,$username,$password,$dbName);
//check condition 
if(!$Conn){
    die("Connection failed: " . $Conn->connect_error);
}

// get daat from html form
if(isset($_POST['submit'])){
    $fname = $_POST['firstname'];
    $lname = $_POST['LastName'];
    $address = $_POST['address'];
    $city = $_POST['City'];
}
// query for create table
$sql = ("CREATE TABLE `workers` (
    ID int,
    FirstName varchar(255),
    LastName varchar(255),
    Email varchar(60),
    Pass varchar(40)
);
");
    // for creating table
// $result = mysqli_query($Conn,$sql);
// if($result){
//     echo "table created successfully";
// }else
// echo "Error due to". $Conn->connect_error;


$sqlin = ("INSERT into `workers`(`FirstName`,`LastName`,`Email`,`pass`) values('$lname','$fname','$address','$city')");

$result = mysqli_query($Conn,$sqlin);








$sqlecho = ("SELECT * from `workers`");

$result = mysqli_query($Conn,$sqlecho);

while($row = mysqli_fetch_assoc($result)){
    echo $row['ID']." ".$row['LastName']." ".$row['FirstName']." ".$row['Email']." ".$row['Pass']."</br>";
}



$Conn->close();
?>



