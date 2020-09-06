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
  <link rel="stylesheet" href="../styles/staff.css">
  <link href="https://use.fontawesome.com/releases/v5.6.1/css/all.css" rel="stylesheet">
</head>
<body>
  <header>
    <?php include( dirname(__FILE__) . '../../modules/header.html'); ?>
  </header>
  <h1 class="title">商品削除完了</h1>
  <div class="customer-form-wrapper">
    <?php 
      try {
        // require_once('dbconnect.php');
      $pro_id = $_POST['id'];

      $pro_id = htmlspecialchars($pro_id,ENT_QUOTES,'UTF-8');
    
      $dsn = 'mysql:dbname=ankoproduct;host=localhost;charset=utf8';
      $user = 'root';
      $password = '';
      $dbh = new PDO($dsn,$user,$password);
      $dbh->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
        
      $sql = 'DELETE FROM ankoproduct WHERE id=?';
      $stmt = $dbh->prepare($sql);
      $data[] = $pro_id;
      $stmt->execute($data);

      $dbh = null;
        
      } catch (Exception $e) {
        print 'ただいま障害により大変ご迷惑をおかけしております。';
        exit();
      }
    ?>
    <p>商品を削除しました。</p>
    <a href="staff-top.php" class="backlink">スタッフメニューのページへ戻る</a>
  </div>
  <div class="footer">
    <?php include( dirname(__FILE__) . '../../modules/footer.html'); ?>
  </div>
</body>
</html>