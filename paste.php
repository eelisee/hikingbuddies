
<?php
//Connecting to sql db.
$connect = new mysqli ('localhost','root','','hikingbuddies') or die ('could not connect');

if ($connect -> connect_error) {
  die('connection failed');
} echo "connected successfully";

//Sending form data to sql db.

$name= $_POST['name'];
$email= $_POST['email'];
$location= $_POST['location'];
$duration= $_POST['duration'];
$distance= $_POST['distance'];
$difficulty= $_POST['difficulty'];



$sql= "INSERT INTO touren (name, email, location, duration, distance, difficulty) VALUES('$name', '$email', '$location', '$duration', '$distance', '$difficulty')";

if($connect ->query ($sql) === TRUE) {
  echo "new record";
} else {
  echo "error";
}

header("Location: ./tours.php");

?>