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
  <h2 class="title">商品削除確認</h2>
  <div class="customer-form-wrapper">

  <?php
    require_once('dbconnect.php');
    $pro_id = $_GET['id'];
    

    // $dsn = 'mysql:dbname=ankoproduct;host=localhost;charset=utf8';
    // $user = 'root';
    // $password = '';
    // $dbh = new PDO($dsn,$user,$password);
    // $dbh->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
    
    $sql = 'SELECT name FROM ankoproduct WHERE id=?';
    $stmt = $dbh->prepare($sql);
    $data[] = $pro_id;
    $stmt->execute($data);

    $rec = $stmt->fetch(PDO::FETCH_ASSOC);
    $pro_name = $rec['name'];

    $dbh = null;

    print '<p>この商品を削除してよろしいですか？</p>';
    print $pro_name;
  ?>
  <form method="post" action="pro-delete-done.php">
    <input type="hidden" name="id" value="<?php print $pro_id; ?>"><br/>
    <input type="submit" value="削除する" class="submit-btn">
    <a href="index-pro.php" class="backlink backstaffmenu" style="height:30px;">商品一覧へ戻る</a>
  </form>
  </div>
<div class="footer">
  <?php
    include( dirname(__FILE__) . '../../modules/footer.html');
  ?>
</div>
</body>
</html>