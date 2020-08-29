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
  <h1 class="title">お問い合わせはこちらから、お気軽にどうぞ！</h1>
  <div class="reserve-content-wrapper">
    <div class="reserve-content">
      シーズンごとの商品考案に<br/>
      苦労されていませんか？<br/>
      箕面製餡所では、年間100種のオリジナル商品を<br/>
      ご提案させていただいております。<br/><br/>
      1ロット500kgから製造いたしますので、<br/>
      お気軽にご相談ください！<br/><br/>
      手作りお菓子教室に関するお問い合わせも、<br/>
      こちらのフォームよりお気軽にお問い合わせください。<br/>
    </div>
    <img src="../images/main1.png" width="400px" height="300px">
  </div>
  <div class="customer-form-wrapper">
  <form method="post" action="contact-confirm.php">
    <p>会社名(法人の場合)</p>
    <input type="text" name="company" size="50" value=""/><br/><br/>
    <p>お名前</p>
    <input type="text" name="name" size="50" value=""/><br/><br/>
    <p>メールアドレス</p>
    <input type="text" name="email" size="50" value=""/><br/><br/>
    <p>お問い合わせ内容</p>
    <textarea name="content" cols="50" rows="5"></textarea><br/><br/>
    <input type="submit" value="送信" class="calendar-submit">
  </form>
</div>
<div class="footer">
<?php
      include( dirname(__FILE__) . '../../modules/footer.html');
?> 
</div>
</body>
</html>