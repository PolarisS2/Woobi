<?php
  include_once $_SERVER["DOCUMENT_ROOT"]."/rwb/_lib/lib.php";
  include_once $_SERVER["DOCUMENT_ROOT"]."/rwb/_lib/_con.php";

  $err = $_GET["err"];

  if($err) {
    $exp = $_GET["exp"];
  }

  // $sql = "DROP TABLE MyGuests";
    
  // if ($conn1->query($sql) === TRUE) {
  //   echo "Table MyGuests droped successfully";
  // } else {
  //   echo "Error creating table: " . $conn1->error;
  // }

  // $sql = "CREATE TABLE MyGuests (
  //   id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
  //   firstname VARCHAR(30) NOT NULL,
  //   lastname VARCHAR(30) NOT NULL,
  //   email VARCHAR(50),
  //   reg_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
  //   )";
    
  //   if (mysqli_query($conn2, $sql)) {
  //     echo "Table MyGuests created successfully";
  //   } else {
  //     echo "Error creating table: " . mysqli_error($conn2);
  //   }

  // try {
    
  //   // sql to create table
  //   $sql = "CREATE TABLE MyGuests (
  //   id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
  //   firstname VARCHAR(30) NOT NULL,
  //   lastname VARCHAR(30) NOT NULL,
  //   email VARCHAR(50),
  //   reg_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
  //   )";
  
  //   // use exec() because no results are returned
  //   $conn3->exec($sql);
  //   echo "Table MyGuests created successfully";
  // } catch(PDOException $e) {
  //   echo $sql . "<br>" . $e->getMessage();
  // }
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="EUC-KR">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <ul>
    <li><a href="admin/">������</a></li>
    <li><a href="user/join.php">ȸ������</a></li>
  </ul>
  <?php if(!$_SESSION['userId']) {?>
    <form action="user/login.php" method="post">
      <input type="text" name="userId">
      <input type="password" name="userPwd">
      <input type="submit" value="�α���">
    </form>
    <div><?php echo $exp ?></div>
  <?php } else { ?>
    <div>�ݰ����ϴ�~ <?php echo $_SESSION['userId']?>��</div>
  <?php }?>
</body>
</html>