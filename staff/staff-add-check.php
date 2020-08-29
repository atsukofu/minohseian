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
  <h1 class="title">スタッフ登録確認</h1>
  <div class="customer-form-wrapper" style="padding-left: 300px;">
  <?php
    $staff_name = $_POST['name'];
    $staff_pass = $_POST['password'];
    $staff_pass2 = $_POST['password2'];

    $staff_name = htmlspecialchars($staff_name,ENT_QUOTES,'UTF-8');
    $staff_pass = htmlspecialchars($staff_pass,ENT_QUOTES,'UTF-8');
    $staff_pass2 = htmlspecialchars($staff_pass2,ENT_QUOTES,'UTF-8');

    if($staff_name == ""){
      print 'スタッフ名が入力されていません<br/>';
    } else {
      print 'スタッフ名：';
      print $staff_name;
      print '<br/>';
    }

    if($staff_pass == ""){
      print 'パスワードが入力されていません。<br/>';
    } 

    if($staff_pass != $staff_pass2) {
      print 'パスワードが一致しません。<br/>';
    }

    if($staff_name == "" || $staff_pass == "" || $staff_pass != $staff_pass2){
      print '<form>';
      print '<input type="button" oclick="history.back()" value="戻る">';
      print '</form>';
    } else {
      $staff_pass = md5($staff_pass);
      print '<form method="post" action="staff-add-done.php">';
      print '<input type="hidden" name="name" value="'.$staff_name.'">';
      print '<input type="hidden" name="password" value="'.$staff_pass.'">';
      print '<br/>';
      print '<input type="submit" value="登録する" class="submit-btn">';
      print '</form>';
    }
    
?>
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