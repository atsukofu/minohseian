<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <title>おいしいあんこ屋さん 箕面製餡所</title>
  <link rel="stylesheet" href="../styles/index.css">
  <link rel="stylesheet" href="../styles/reserve.css">
  <link rel="stylesheet" href="../styles/product.css">
  <link href="https://use.fontawesome.com/releases/v5.6.1/css/all.css" rel="stylesheet">
</head>
<body>
  <header>
    <div class="header-left">
      <p class="header-text">大阪北部の箕面市で100年愛されるあんこやさんです。</p>
      <img src="../images/logo.png" class="header-logo">
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
  <h1 class="title">商品一覧</h1>
  <div class="promotion">
      <div class="promotion__content">
        箕面製餡所の美味しい定番あんこ達を紹介します。<br/>
        減農薬・有機肥料にこだわり生産を続ける<br/>
        北海道十勝の契約農家から仕入れた小豆を使用しています。<br/><br/>
        掲載商品の他にも特注商品を含め、<br/>
        年間約100種の商品を開発・ご提案しております。<br/>
        こだわりのあんこ・季節のあんこ・あんこについてはぜひ<br/>
        箕面製餡所にご相談ください！
      </div>
      <img src="../images/promotion.png" class="promotion__img">
  </div>
  <div class="products-wrapper">
    <?php
    try {
      
      $dsn = 'mysql:dbname=ankoproduct;host=localhost;charset=utf8';
      $user = 'root';
      $password = '';
      $dbh = new PDO($dsn, $user, $password);
      $dbh->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
      
      $sql = 'SELECT id,name,image FROM ankoproduct WHERE 1';
      $stmt = $dbh->prepare($sql);
      $stmt->execute();
      
      $dbh = null;
      
      while(true) {
        $rec = $stmt->fetch(PDO::FETCH_ASSOC);
        if($rec==false){
        break;
      }
      print '<div class="products">';
      print '<img src="../gazou/'.$rec['image'].'" class="products-index-image">';
      print '<div class="products-name-area">';
      print '<p class="products-name">';
      print $rec['name'];
      print '</p>';
      print '<i class="fas fa-chevron-circle-right"></i>';
      print '<a href="pro-show.php?proid='.$rec['id'].'" class="products-show-link">';
      print '商品詳細を見る';
      print '</a>';
      print '</div>';
      print '</div>';
    }
    
  } catch(Exception $e) {
    print 'ただいま障害により大変ご迷惑をおかけしております。';
    exit();
  }
  
  ?>
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
        <img src="../images/footer_logo.png" class="footer-logo">
        <div class="footer-address">〒590-0021<br/>大阪府箕面市みのお台<br/>1丁目23番</div>
      </div>
      </div>
    <div class="footer-bottom">
      Copyright (c) 箕面製饀所 Co., Ltd All rights reserved.
    </div>
  </div>
</body>
</html>