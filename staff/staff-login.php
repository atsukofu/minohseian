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
  <h1 class="title">スタッフログインページ</h1>
  <div class="customer-form-wrapper" style="padding-left: 300px;">
    <p class="form-introduction">スタッフ名を入力してください。</p>
    <form method="POST" action="staff-login-check.php">
    <input type="text" name="name" style="width: 200px;">
    <p class="form-introduction">パスワードを入力してください。</p>
    <input type="password" name="password" style="width: 200px;"><br/><br/>
    <input type="submit" value="ログインする" class="submit-btn">
    </form>
  </div>
</section>
  <div class="footer">
    <?php
      include( dirname(__FILE__) . '../../modules/footer.html');
    ?>
  </div>
</body>
</html>