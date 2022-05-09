<?php

echo "Docker simple example<br>";

if($mysqli->connect_error){
    echo "<h1>Connection failed<h1>". $mysqli->connect_error;
}else{
  echo "<h1>Connected to MYSQL<h1>";
}

$mysqli = new mysqli("db", "root", "example", "db_example");

/*$sql = "INSERT INTO users (name, fav_color) VALUES('Lil Sneazy', 'Yellow')";
$result = $mysqli->query($sql);
$sql = "INSERT INTO users (name, fav_color) VALUES('Nick Jonas', 'Brown')";
$result = $mysqli->query($sql);
$sql = "INSERT INTO users (name, fav_color) VALUES('Maroon 5', 'Maroon')";
$result = $mysqli->query($sql);
$sql = "INSERT INTO users (name, fav_color) VALUES('Tommy Baker', '043A2B')";
$result = $mysqli->query($sql);


$sql = 'SELECT * FROM users';

if ($result = $mysqli->query($sql)) {
    while ($data = $result->fetch_object()) {
        $users[] = $data;
    }
}

foreach ($users as $user) {
    echo "<br>";
    echo $user->name . " " . $user->fav_color;
    echo "<br>";
}*/