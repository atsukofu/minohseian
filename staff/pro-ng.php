<?php
  session_start();
  session_regenerate_id(true);
  if(isset($_SESSION['login'])==false){
    print 'ログインされていません。<br/>';
    print '<a href="staff-login.php">ログイン画面へ</a>';
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
  <link href="https://use.fontawesome.com/releases/v5.6.1/css/all.css" rel="stylesheet">
</head>
<body>
<header>
  <?php
    include( dirname(__FILE__) . '../../modules/header.html');
  ?>
</header>
  <h2 class="title">商品が入力されていません。</h2>
  <div class="customer-form-wrapper">
    <p>削除もしくは編集する商品を選択してください。</p>
    <br/>
    <a href="index-pro.php" class="backlink">商品選択ページに戻る</a>
  </div>
<div class="footer">
  <?php
    include( dirname(__FILE__) . '../../modules/footer.html');
  ?>
</div>
</body>
</html>