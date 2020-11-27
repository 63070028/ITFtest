<?php

$conn = mysqli_init();
mysqli_real_connect($conn, 'itf-test63070028.mysql.database.azure.com', 'it63070028@itf-test63070028', 'UWLtol53', 'itftest', 3306);
if (mysqli_connect_errno($conn))
{
    die('Failed to connect to MySQL: '.mysqli_connect_error());
}


$name = $_POST['name'];
$price = $_POST['price'];
$amount = $_POST['amount'];
$total = $_POST['amount']*$_POST['price'];

$sql = "INSERT INTO guestbook (Product , Price , Amount , Total) VALUES ('$name', '$price', '$amount', '$total')";


if (mysqli_query($conn, $sql)) {
    echo "New record created successfully";
  } else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
  }
  
mysqli_close($conn);
?>
