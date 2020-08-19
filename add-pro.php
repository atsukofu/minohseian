<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <title>おいしいあんこ屋さん 箕面製餡所</title>
  <link rel="stylesheet" href="styles/add-pro.css">
</head>
<body>
  <div class="add-pro-title">商品情報登録ページ</div>
  <form method="post" action="add-pro-check.php" enctype="multipart/form-data">
    <p>商品名</p>
    <input type="text" name="name" style="width:200px"><br/>
    <p>商品説明文</p>
    <textarea name="content" cols="30" rows="10"></textarea>
    <p>糖度</p>
    <input type="text" name="brix" style="width: 50px;"><br/>
    <p>商品規格</p>
    <input type="text" name="weight" style="width: 50px;"><br/>    
    <p>保存方法</p>
    <input type="text" name="preserve" style="width: 100px;"><br/>
    <p>賞味期限</p>
    <input type="text" name="expir" style="width: 100px;"><br>
    <p>画像の選択</p>
    <input type="file" name="image" style="width: 400px;"><br />
    <br/>
    <input type="button" onclick="history.back()" value="戻る">
    <input type="submit" value="登録">
  </form>
</body>
</html>