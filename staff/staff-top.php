<?php
  session_start();
  session_regenerate_id(true);
  if(isset($_SESSION['login'])==false){
    print 'ログインされていません。<br/>';
    print '<a href="staff-login.html">ログイン画面へ</a>';
    exit();
  }
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
  <h1 class="title">スタッフ専用ページ</h1>
  <div class="customer-form-wrapper">
    <?php 
      print '<div class="staff-name">スタッフ名:'.$_SESSION['staff_name'].'</div>';
      print '<br/><br/>' ;
    ?>
    <a href="add-pro.php" class="staff-menu">商品登録</a>
    <a href="index-reserve.php" class="staff-menu">教室予約確認</a><br/><br/>
    <a href="staff-logout.php" class=staff-menu>ログアウト</a>
  </div>
  <div class="footer">
    <?php include( dirname(__FILE__) . '../../modules/footer.html'); ?>
  </div>
</body>
</html>