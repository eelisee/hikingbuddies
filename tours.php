<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css" />
    <link rel="preconnect" href="https://fonts.googleapis.com"> 
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin> 
    <link href="https://fonts.googleapis.com/css2?family=Balsamiq+Sans&display=swap" rel="stylesheet">
    <title>Hiking Buddies | tours</title>

<?php

$dbServername = "localhost";
$dbUsername = "root";
$dbPassword = "";
$dbName = "hikingbuddies";

// Create connection
$conn = mysqli_connect( $dbServername , $dbUsername , $dbPassword , $dbName );



// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

?>

</head>
<body>
    <nav>
        <div class="logo">
          <h7>
            <a href="index.html">Hiking Buddies</a>
          </h7>
        </div> 
        <ul class="nav-links">
          <li><a href="tours.php">tours</a></li>
          <li><a href="#">about</a></li>
          <li><a href="login.html">login</a></li>
        </ul>
        <div class="burger">
          <div class="line1"></div>
          <div class="line2"></div>
          <div class="line3"></div>
        </div>
    </nav>
    
    <main>
        <div class="addTour">
            <a href="new-hike.html">add tour</a>
        </div>
    </main>    
    
    <script src="js/app.js"></script>
</body>
</html>

<?php

$dbServername = "localhost";
$dbUsername = "root";
$dbPassword = "";
$dbName = "hikingbuddies";

// Create connection
$conn = mysqli_connect( $dbServername , $dbUsername , $dbPassword , $dbName );



// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}


// Create database
//$sql = "CREATE DATABASE hikingbuddies";
//if ($conn->query($sql) === TRUE) {
//  echo "Database created successfully";
//} else {
//  echo "Error creating database: " . $conn->error;
//}

// sql to create table
//$sql = "CREATE TABLE touren(
//    id INT(100) NOT NULL PRIMARY KEY AUTO_INCREMENT,
//    fname VARCHAR(100) NOT NULL,
//    email VARCHAR(100) NOT NULL,
//    loc VARCHAR(100) NOT NULL,
//    duration VARCHAR(100) NOT NULL,
//    distance VARCHAR(100) NOT NULL,
//    difficulty VARCHAR(100) NOT NULL,
//    )";
//    
//    if ($conn->query($sql) === TRUE) {
//      echo "Table touren created successfully";
//    } else {
//      echo "Error creating table: " . $conn->error;
//    }
//    

$sql = "SELECT name, email, location, duration, distance, difficulty FROM touren";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo "Name: " . $row["name"]. " - E-Mail: " . $row["email"]. " - Location: " . $row["location"]. " - Duration: " . $row["duration"]. " - Distance: " . $row["distance"]. " - Difficulty: " . $row["difficulty"]. " " . "<br>";
  }
} else {
  echo "0 results";
}

// $sql = "INSERT INTO touren (id, email)
// VALUES ('John', 'john@example.com')";

//if ($conn->query($sql) === TRUE) {
//  echo "New record created successfully";
//} else {
//  echo "Error: " . $sql . "<br>" . $conn->error;
//}

    $conn->close();
?>
