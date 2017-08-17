<?php
include ('shoes_dao.php');

$sql = "SELECT id, pwd FROM members WHERE id = '".$_POST['id']."' AND pwd = '".$_POST['pwd']."';";
$res = mysqli_query($conn, $sql);
$row = mysqli_fetch_assoc($res);
    if ($row != null) {
       header('Location: http://localhost/followme.php');
    } else if($row == null){
      echo("<script name=javascript>self.window.alert('없는 회원정보입니다.'); location.replace('/');</script>");
    }
     ?>
