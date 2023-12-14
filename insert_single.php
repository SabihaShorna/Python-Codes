<?php
/* Attempt MySQL server connection. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
$link = mysqli_connect("localhost", "root", "", "test1");
// Check connection
if($link === false){
 die("ERROR: Could not connect. " . mysqli_connect_error());
}
// Attempt insert query execution
$sql = "INSERT INTO student (Fname, Lname, cgpa, semester) VALUES ('Peter', 'Parker', 3.5,4)";
if(mysqli_query($link, $sql)){
 echo "Records inserted successfully.";
}
else{
 echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}
// Close connection
mysqli_close($link);
?>
