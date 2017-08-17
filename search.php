<?php
include ('shoes_dao.php');


        $sql ="SELECT * FROM destination WHERE station ='".$_POST['station']."';";
        $result=mysqli_query($conn, $sql);
        $row=mysqli_fetch_assoc($result);
        if($_POST['station']==null) {
            echo("<script name=javascript>window.history.back(); self.window.alert('검색어를 입력해주세요.');</script>");
        }
        if($row !=null) {
            echo("<script name=javascript>window.history.back(); self.window.alert('검색어:".$_POST['station']."');</script>");
        } else {
            echo("<script name=javascript>window.history.back(); self.window.alert('검색 결과가 없습니다. 다시 검색해 주세요.');</script>");
        }


?>
