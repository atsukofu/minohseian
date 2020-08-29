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
      <input type="button" onclick="history.back()" value="戻る" class="submit-btn">
      <input type="submit" value="登録" class="submit-btn">
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