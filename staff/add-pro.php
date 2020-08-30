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
  <section>
    <h2 class="title">商品情報登録ページ</h2>
    <div class="customer-form-wrapper">
    <form method="post" action="add-pro-check.php" enctype="multipart/form-data">
      <p class="form-introduction">商品名</p>
      <input type="text" name="name" style="width:300px"><br/>
      <p class="form-introduction">商品説明文</p>
      <textarea name="content" cols="60" rows="5"></textarea>
      <p class="form-introduction">糖度</p>
      <input type="text" name="brix" style="width: 200px;"><br/>
      <p class="form-introduction">商品規格</p>
      <input type="text" name="weight" style="width: 200px;"><br/>    
      <p class="form-introduction">保存方法</p>
      <input type="text" name="preserve" style="width: 200px;"><br/>
      <p class="form-introduction">賞味期限</p>
      <input type="text" name="expir" style="width: 200px;"><br>
      <p class="form-introduction">画像の選択</p>
      <input type="file" name="image" style="width: 400px;"><br />
      <br/>
      <input type="submit" value="登録" class="submit-btn"><br/><br/>
      <a href="staff-top.php" class="backlink backstaffmenu" style="height:30px;">スタッフメニューのページへ戻る</a>
    </form>
  </div>
</section>
<div class="footer">
  <?php
    include( dirname(__FILE__) . '/footer.html');
  ?>
</div>
</body>
</html>