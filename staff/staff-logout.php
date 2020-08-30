<?php
  session_start();
  $_SESSION = array();
  if(isset($_COOKIE[session_name()])==true){
    setcookie(session_name(), '', time()-42000, '/');
  }
  session_destroy();
?>
<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <title>おいしいあんこ屋さん 箕面製餡所</title>
  <link rel="stylesheet" href="../styles/index.css">
  <link rel="stylesheet" href="../styles/reserve.css">
  <link rel="stylesheet" href="../styles/staff.css">
  <link href="https://use.fontawesome.com/releases/v5.6.1/css/all.css" rel="stylesheet">
</head>
<body>
  <header>
    <?php include( dirname(__FILE__) . '../../modules/header.html'); ?>
  </header>
  <h1 class="title">ログアウトしました</h1>
  <div class="customer-form-wrapper">
    <a href="staff-login.php" class="staff-menu">ログイン画面へ</a><br/><br/>
    <a href="../index.php" class="staff-menu">トップページへ</a>
  </div>
  <div class="footer">
    <?php include( dirname(__FILE__) . '../../modules/footer.html'); ?>
  </div>
</body>
</html>