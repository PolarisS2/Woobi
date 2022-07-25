<?php
  include_once $_SERVER["DOCUMENT_ROOT"]."/rwb/_lib/_con.php";
  include_once $_SERVER["DOCUMENT_ROOT"]."/rwb/_lib/lib.php";

  $err = $_GET["err"];
  if ($err) {
    $exp = $_GET["exp"];
  }

  $sortType = $_GET["sortType"];
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="EUC-KR">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>장르등록</title>
</head>
<body>
  <?php
    $exp ? print("<h4 class='error'>$exp</h4>") : '';
  ?>
  <form action="genre_up_ok.php" method="post">
    <input type="text" name="genreName">
    <input type="submit" value="등록">
  </form>

  <?php
    $sql = "SELECT * FROM Genre";
    
    if ($sortType) {
      $sql .= " ORDER BY ".$sortType;
    } else {
      $sql .= " ORDER BY name";
    }

    $res = $conn1->query($sql);
    echo "<table border=\"1\"><tr><th colspan=\"4\">장르</th></tr><tr><td onclick=\"sortList('id')\">번호</td><td colspan=\"3\" onclick=\"sortList('name')\">장르명</td></tr>";
    while($row = $res->fetch_assoc()) {
      echo "<tr><td>".$row["id"]."</td><td>".$row["name"]."</td><td><button onclick=\"delGenre(".$row["id"].");\">삭제</button><button onclick=\"modGenre(".$row["id"].", '".$row["name"]."')\">수정</button></td></tr>";
    }
    echo "</table>";
  ?>

  <script src="/rwb/js/common.js"></script>
  <script src="/rwb/admin/genre/js/genre.js"></script>
</body>
</html>