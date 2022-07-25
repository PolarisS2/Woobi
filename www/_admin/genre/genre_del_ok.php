<?php
  include_once $_SERVER["DOCUMENT_ROOT"]."/_lib/_con.php";
  include_once $_SERVER["DOCUMENT_ROOT"]."/_lib/lib.php";

  $genreId = $_GET["genreId"];

  $sql = "DELETE FROM Genre WHERE id = $genreId";

  if ($conn1->query($sql) === TRUE) {
    gotoUrl('index.php');
  } else {
    errHandler('index.php', $conn1->error);
  }
?>