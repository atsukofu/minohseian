<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <title>おいしいあんこ屋さん 箕面製餡所</title>
  <link rel="stylesheet" href="styles/index.css">
  <link rel="stylesheet" href="styles/reserve.css">
  <link href="https://use.fontawesome.com/releases/v5.6.1/css/all.css" rel="stylesheet">
</head>
<body>
<header>
    <div class="header-left">
      <p class="header-text">大阪北部の箕面市で100年愛されるあんこやさんです。</p>
      <img src="images/logo.png" class="header-logo">
    </div>
    <div class="header-right">
      <div class="header-tel">
        <i class="fas fa-phone-volume"></i>
        <span class="telnumber">072-014-085</span>
        <p class="business-time">月〜金 9:00~18:00</p>
      </div>
      <div class="header-menu">
        <ul class="menu-list">
          <li><a href="#">会社概要</a></li>
          <li><a href="product/pro-index.php">商品紹介</a></li>
          <li><a href="reserve/new-reserve.php">和菓子教室</a></li>
          <li><a href="contact/contact-new.html">お問い合わせ</a></li>
          <li>
            <i class="fab fa-facebook-square"></i>
            <i class="fab fa-twitter-square"></i>
          </li>
        </ul>
      </div>
    </div>
  </header>
<section> 
  <h2 class="title">登録完了</h2>
  <div class="customer-form-wrapper">
  <?php
    try {
      $pro_name = $_POST['name'];
      $pro_content = $_POST['content'];
      $pro_brix = $_POST['brix'];
      $pro_weight = $_POST['weight'];
      $pro_preserve = $_POST['preserve'];
      $pro_expir = $_POST['expir'];
      $pro_image_name = $_POST['image_name'];

      $pro_name = htmlspecialchars($pro_name,ENT_QUOTES,'UTF-8');
      $pro_content = htmlspecialchars($pro_content,ENT_QUOTES,'UTF-8');
      $pro_brix = htmlspecialchars($pro_brix,ENT_QUOTES,'UTF-8');
      $pro_weight = htmlspecialchars($pro_weight,ENT_QUOTES,'UTF-8');
      $pro_preserve = htmlspecialchars($pro_preserve,ENT_QUOTES,'UTF-8');
      $pro_expir = htmlspecialchars($pro_expir,ENT_QUOTES,'UTF-8');

      $dsn = 'mysql:dbname=ankoproduct;host=localhost;charset=utf8';
      $user = 'root';
      $password = '';
      $dbh = new PDO($dsn, $user, $password);
      $dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

      $sql = 'INSERT INTO ankoproduct(name,content,brix,weight,preserve,expir,image)VALUES (?,?,?,?,?,?,?)';
      $stmt = $dbh->prepare($sql);
      $data[] = $pro_name;
      $data[] = $pro_content;
      $data[] = $pro_brix;
      $data[] = $pro_weight;
      $data[] = $pro_preserve;
      $data[] = $pro_expir;
      $data[] = $pro_image_name;
      $stmt->execute($data);

      $dbh = null;

      print $pro_name;
      print 'を登録しました。<br /><br/>';

    } catch(Exception $e) { 
      print 'ただいま障害により大変ご迷惑をおかけしております。';
      exit();
    }
  ?>
  <a href="add-pro.php" class="backlink">戻る</a>
  </div>
  </section>
  <div class="footer">
  <div class="footer-top">
    <ul class="footer-list">
      <li><a href="/minohseian/index.html">HOME</a></li>
      <li><a href="#">会社概要</a></li>
      <li><a href="/minohseian/product/pro-index.php">商品紹介</a></li>
      <li><a href="/minohseian/reserve/new-reserve.php">和菓子教室</a></li>
      <li><a href="/minohseian/contact/contact-new.html">お問い合わせ</a></li>
      <li><a href="#">STAFF</a></li>
    </ul>
    <div class="footer-company-wrapper">
      <img src="images/footer_logo.png" class="footer-logo">
      <div class="footer-address">〒590-0021<br/>大阪府箕面市みのお台<br/>1丁目23番</div>
    </div>
    </div>
  <div class="footer-bottom">
    Copyright (c) 箕面製饀所 Co., Ltd All rights reserved.
  </div>
</div>
</body>
</html>