<?php

$conn = mysqli_init();
mysqli_real_connect($conn, 'nutcha20.mysql.database.azure.com', 'nutcha@nutcha20', '20092544a-a', 'itflab', 3306);
if (mysqli_connect_errno($conn))
{
    die('Failed to connect to MySQL: '.mysqli_connect_error());
}


$name = $_POST['name'];
$comment = $_POST['comment'];



$sql = "INSERT INTO gust (Name , Comment) VALUES ('$name', '$comment')";


if (mysqli_query($conn, $sql)) {
    header('Location: https://nutcha.azurewebsites.net/itshow.php');
  } else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
  }
  
mysqli_close($conn);
?>
