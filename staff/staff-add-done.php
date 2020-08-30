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
  <section>
  <h1 class="title">スタッフ登録確認</h1>
  <div class="customer-form-wrapper" style="padding-left: 300px;">
  <?php

  try{
    require_once('dbconnect.php');

    $staff_name = $_POST['name'];
    $staff_pass = $_POST['password'];
    
    $staff_name = htmlspecialchars($staff_name,ENT_QUOTES,'UTF-8');
    $staff_pass = htmlspecialchars($staff_pass,ENT_QUOTES,'UTF-8');

    // $dsn = 'mysql:dbname=ankoproduct;host=localhost;charset=utf8';
    // $user = 'root';
    // $password = '';
    // $dbh = new PDO($dsn,$user,$password);
    // $dbh -> setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
    $sql = 'INSERT INTO staff (name, password) VALUES(?,?)';
    $stmt = $dbh->prepare($sql);
    $data[] = $staff_name;
    $data[] = $staff_pass;
    $stmt->execute($data);
    
    $dbh = null;
    

    print $staff_name."さんを登録しました。<br/>";
    
  } catch(Exception $e) {
    print 'ただいま障害により大変ご迷惑をおかけしております。';
    exit();
  }
?>
<br/>
<a href="staff-add.html" class="backlink">スタッフ登録ページへ戻る</a>
</section>
  <div class="footer">
    <?php
      include( dirname(__FILE__) . '../../modules/footer.html');
    ?>
  </div>
</body>
</html>