<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <title>おいしいあんこ屋さん 箕面製餡所</title>
  <link rel="stylesheet" href="styles/index.css">
</head>
<body>
  <?php
  try {
    $pro_code = $_GET['proid'];

    $dsn = 'mysql:dbname=ankoproduct;host=localhost;charset=utf8';
    $user = 'root';
    $password = '';
    $dbh = new PDO($dsn, $user, $password);
    $dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $sql = 'SELECT name,content,brix,weight,preserve,expir,image FROM ankoproduct WHERE id=?';
    $stmt = $dbh -> prepare($sql);
    $data[] = $pro_code;
    $stmt ->execute($data);

    $rec = $stmt -> fetch(PDO::FETCH_ASSOC);
    $pro_name = $rec['name'];
    $pro_content = $rec['content'];
    $pro_brix = $rec['brix'];
    $pro_weight = $rec['weight'];
    $pro_preserve = $rec['preserve'];
    $pro_expir = $rec['expir'];
    $pro_image = $rec['image'];
    $dbh = null;

    
    print '<div>';
    print $pro_name;
    print '</div>';
    print '<img src="../gazou/'.$pro_image.'" style="width: 300px; height: 300px;">';

  } catch(Exception $e) {
    print 'ただいま障害により大変ご迷惑をおかけしております。';
    exit();
  }

  ?>

  <table bordre="1">
    <tr>
      <tr><td>商品説明</td><td><?php print $pro_content ?></td></tr>
      <tr><td>糖度</td><td><?php print $pro_brix ?></td></tr>
      <tr><td>商品規格</td><td><?php print $pro_weight ?></td></tr>
      <tr><td>保存方法</td><td><?php print $pro_preserve ?></td></tr>
      <tr><td>賞味期限</td><td><?php print $pro_expir ?></td></tr>
    </tr>
  </table>

  <a href="pro-index.php">商品一覧へ戻る</a>