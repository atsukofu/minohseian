<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <title>おいしいあんこ屋さん 箕面製餡所</title>
  <link rel="stylesheet" href="styles/add-pro.css">
</head>
<body>
  <h2 class="add-pro-title">商品情報登録ページ</h2>
  <form method="post" action="add-pro-check.php" enctype="multipart/form-data">
    <div>商品名</div>
    <input type="text" name="name" style="width:200px"><br/>
    <div>商品説明文</div>
    <textarea name="content" cols="30" rows="5"></textarea>
    <div>糖度</div>
    <input type="text" name="brix" style="width: 100px;"><br/>
    <div>商品規格</div>
    <input type="text" name="weight" style="width: 100px;"><br/>    
    <div>保存方法</div>
    <input type="text" name="preserve" style="width: 100px;"><br/>
    <div>賞味期限</div>
    <input type="text" name="expir" style="width: 100px;"><br>
    <div>画像の選択</div>
    <input type="file" name="image" style="width: 400px;"><br />
    <br/>
    <input type="button" onclick="history.back()" value="戻る">
    <input type="submit" value="登録">
  </form>
</body>
</html>