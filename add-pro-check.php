<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <title>おいしいあんこ屋さん 箕面製餡所</title>
  <link rel="stylesheet" href="styles/index.css">
</head>
<body>
  <?php
    $pro_name = $_POST['name'];
    $pro_content = $_POST['content'];
    $pro_brix = $_POST['brix'];
    $pro_weight = $_POST['weight'];
    $pro_preserve = $_POST['preserve'];
    $pro_expir = $_POST['expir'];
    $pro_image = $_FILES['image'];

    $pro_name = htmlspecialchars($pro_name,ENT_QUOTES,'UTF-8');
    $pro_content = htmlspecialchars($pro_content,ENT_QUOTES,'UTF-8');
    $pro_brix = htmlspecialchars($pro_brix,ENT_QUOTES,'UTF-8');
    $pro_weight = htmlspecialchars($pro_weight,ENT_QUOTES,'UTF-8');
    $pro_preserve = htmlspecialchars($pro_preserve,ENT_QUOTES,'UTF-8');
    $pro_expir = htmlspecialchars($pro_expir,ENT_QUOTES,'UTF-8');

    if($pro_name == "") {
      print '商品名が入力されていません。<br/>';
    } else {
      print '商品名: ';
      print $pro_name;
      print '<br/>';
    }

    if($pro_content == "") {
      print '商品説明文が入力されていません。<br/>';
    } else {
      print '商品説明文:<br/>';
      print $pro_content;
      print '<br/>';
    }

    if($pro_brix == "") {
      print '糖度が入力されていません。<br/>';
    } else {
      print '糖度: ';
      print $pro_brix;
      print '<br/>';
    }

    if($pro_weight == "") {
      print '商品規格が入力されていません。<br/>';
    } else {
      print '商品規格: ';
      print $pro_weight;
      print '<br/>';
    }

    if($pro_preserve == "") {
      print '保存方法が入力されていません。<br/>';
    } else {
      print '保存方法: ';
      print $pro_preserve;
      print '<br/>';
    }

    if($pro_expir == "") {
      print '賞味期限が入力されていません。<br/>';
    } else {
      print '賞味期限: ';
      print $pro_expir;
      print '<br/>';
    }

    if($pro_image['size'] > 0) {
      if($pro_image['size'] > 1000000) {
        print '画像が大きすぎます。';
      } else {
        move_uploaded_file($pro_image['tmp_name'],'gazou/'.$pro_image['name']);
        print '<img src = "gazou/'.$pro_image['name'].'">';
      }
    }

    if($pro_name == "" || $pro_content == "" || $pro_brix == "" || $pro_weight == "" || $pro_preserve == "" || $pro_expir == ""|| $pro_image['size'] > 1000000) {
      print '<form>';
      print '<input type="button" onclick="history.back()" value="戻る">';
      print '</form>';
    } else {
      print '上記の商品を登録します。';
      print '<form method="post" action="add-pro-done.php">';
      print '<input name="name" value="'.$pro_name.'">';
      print '<input name="content" value="'.$pro_content.'">';
      print '<input name="brix" value="'.$pro_brix.'">';
      print '<input name="weight" value="'.$pro_weight.'">';
      print '<input name="preserve" value="'.$pro_preserve.'">';
      print '<input name="expir" value="'.$pro_expir.'">';
      print '<input name="image_name" value="'.$pro_image['name'].'">';
      print '<input type="button" onclick="history.back()" value="戻る">';
      print '<input type="submit" value="OK">';
      print '</form>';
    }

  ?>
</body>
</html>