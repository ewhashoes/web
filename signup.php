<?php
$servername = "localhost";
$username="root";
$password="root";
$dbname="shoes";
$conn=new mysqli($servername, $username, $password, $dbname);
if($conn->connect_error) {
  die("메세지: " . $conn->connect_error);
}
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>따라오슈</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <!-- font awesome -->
    <link rel="stylesheet" href="css/font-awesome.min.css" media="screen" title="no title" charset="utf-8">
    <!-- Custom style -->
    <link rel="stylesheet" href="css/re_style.css" media="screen" title="no title" charset="utf-8">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body style="background-color:#E0E3DA">
      <form method="post" action="complete_signup.php">
      <article class="container">
        <div class="col-md-6 col-md-offset-3">
        <div class="" style="padding:20px">
            <a href="http://localhost"<center><img src="http://imageshack.com/a/img924/8268/9iaouH.png" class="img-responsive center-block" alt="Banner" id="logo" style="width:600px;"></center></a>
        </div>
        <label for="InputId">아이디</label>
            <div class="form-group">
              <div style="float:left;" class="">
              <input type="text" class="form-control" name="id" placeholder="아이디" style="width:100%;"/>
            </div>
            <div>
              <input type="submit" class="btn btn-success" formaction="check_id.php" value="중복확인" style="vertical-align: middle; width:100px; margin-left: 15px;"/>
            </div>
            </div>

            <div class="form-group" style="padding-top: 20px">
              <label for="InputPassword1">비밀번호</label>
              <input type="password" class="form-control" name="pwd1" id="Password" placeholder="비밀번호">
            </div>

            <div class="form-group" style="padding-top: 20px">
              <label for="InputPassword2" >비밀번호 확인</label>
              <input type="password" class="form-control" name="pwd2" id="Password2" placeholder="비밀번호 확인">
              <p class="help-block">비밀번호 확인을 위해 다시 한번 입력 해 주세요.</p>
            </div>
            <div class="form-group" style="padding-top: 20px">
              <label for="username">NFC 태그 번호</label>
              <input type="text" name="tag" class="form-control" id="Name" placeholder="이름을 입력해 주세요">
            </div>
            <div class="form-group text-center" style="padding-top: 20px">
              <button type="submit" class="btn btn-info">회원가입<i class="fa fa-check spaceLeft"></i></button>
              <button type="button" class="btn btn-warning" onclick="location.href='http://localhost'">뒤로가기<i class="fa fa-times spaceLeft"></i></button>
            </div>
        </div>

      </article>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
  </form>

  </body>
</html>
