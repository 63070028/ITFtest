<!DOCTYPE html>
<html lang="en">
<head>
  <title>ITF 63070028</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>
<body>
<?php
$conn = mysqli_init();
mysqli_real_connect($conn, 'itf-test63070028.mysql.database.azure.com', 'it63070028@itf-test63070028', 'UWLtol53', 'itftest', 3306);
if (mysqli_connect_errno($conn))
{
    die('Failed to connect to MySQL: '.mysqli_connect_error());
}
$res = mysqli_query($conn, 'SELECT * FROM book');
?>
<div class="container">
  <table class="table table-dark table-striped" width="600" border="1">
    <tr>
      <th width="100"> <div align="center">ชื่อสินค้า</div></th>
      <th width="200"> <div align="center">ราคาต่อหน่วย </div></th>
      <th width="100"> <div align="center">จำนวน </div></th>
      <th width="100"> <div align="center">ราคาทั้งหมด </div></th>
    </tr>
  <?php
  while($Result = mysqli_fetch_array($res))
  {
  ?>
    <tr>
      <td><?php echo $Result['Product'];?></div></td>
      <td><?php echo $Result['Price'];?></td>
      <td><?php echo $Result['Amount'];?></td>
      <td><?php echo $Result['Total'];?></td>
      <td> <div align="center">
              <div class="row">
                  <div class="card-body"> 
                    <a href="delete.php?delete_id=<?php echo $Result['ID']; ?>" class="btn btn-danger">Delete</a>
                  </div>
              </div>
            </div>
      </td>
    </tr>
  <?php
  }
  ?>
  </table>
    <div class="card-body">
      <a href="from.php" class="btn btn-success mb-3">Add+</a>
    </div>
<?php
mysqli_close($conn);
?>
</body>
</html>
