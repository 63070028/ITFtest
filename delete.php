<?php

$conn = mysqli_init();
mysqli_real_connect($conn, 'itf-test63070028.mysql.database.azure.com', 'it63070028@itf-test63070028', 'UWLtol53', 'itftest', 3306);
if (mysqli_connect_errno($conn))
{
    die('Failed to connect to MySQL: '.mysqli_connect_error());
}

$id = $_GET['delete_id'];

$sql = "DELETE FROM book WHERE id = $id";

if (mysqli_query($conn, $sql)) {
    echo "New record created successfully";
  } else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
  }
  
mysqli_close($conn);
?>
