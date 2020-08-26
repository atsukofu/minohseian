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
  <h1 class="title">お問い合わせ内容確認</h1>
  <div class="customer-form-wrapper">
    <p>以下の内容で送信いたします。</p><br />
  <?php
    $contact_company = $_POST['company'];
    $contact_name = $_POST['name'];
    $contact_email = $_POST['email'];
    $contact_content = $_POST['content'];

    $contact_company = htmlspecialchars($contact_company,ENT_QUOTES,'UTF-8');
    $contact_name = htmlspecialchars($contact_name,ENT_QUOTES,'UTF-8');
    $contact_email = htmlspecialchars($contact_email,ENT_QUOTES,'UTF-8');
    $contact_content = htmlspecialchars($contact_content,ENT_QUOTES,'UTF-8');

    if($contact_company != ""){
      print "会社名: ";
      print $contact_company;
      print '<br /><br />';
    }

    if($contact_name == ""){
      print "お名前を入力してください";
    } else {
      print "お名前: ";
      print $contact_name;
      print '様<br /><br />';
    }
  
    if($contact_email == ""){
      print "メールアドレスを入力してください。";
    } else {
      print "メールアドレス: ";
      print $contact_email;
      print '<br/><br />';
    }

      if($contact_content == ""){
        print "お問い合わせ内容を入力してください";
      } else {
        print "お問い合わせ内容<br />";
        print $contact_content;
        print '<br /><br />';
      }

    if($contact_name == "" || $contact_email == "" || $contact_content == ""){
      print '<input type="button" onclick="history.back()" value="戻る">';
    } else {
      print '<form action="mailto.php">';
      print '<input type="hidden" name="company" value="'.$contact_company.'">';
      print '<input type="hidden" name="name" value="'.$contact_name.'">';
      print '<input type="hidden" name="email" value="'.$contact_email.'">';
      print '<input type="hidden" name="content" value="'.$contact_content.'">';
      print '<input type="submit" value="送信する">';
      print '</form>';
    }

  ?>
  </div>
  </form>
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