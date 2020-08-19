<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <title>おいしいあんこ屋さん 箕面製餡所</title>
  <link rel="stylesheet" href="styles/add-pro.css">
</head>
<body>
  <?php
    try {
      $pro_name = $_POST['name'];
      $pro_content = $_POST['content'];
      $pro_brix = $_POST['brix'];
      $pro_weight = $_POST['weight'];
      $pro_preserve = $_POST['preserve'];
      $pro_expir = $_POST['expir'];
      $pro_image_name = $_POST['image_name'];

      $pro_name = htmlspecialchars($pro_name,ENT_QUOTES,'UTF-8');
      $pro_content = htmlspecialchars($pro_content,ENT_QUOTES,'UTF-8');
      $pro_brix = htmlspecialchars($pro_brix,ENT_QUOTES,'UTF-8');
      $pro_weight = htmlspecialchars($pro_weight,ENT_QUOTES,'UTF-8');
      $pro_preserve = htmlspecialchars($pro_preserve,ENT_QUOTES,'UTF-8');
      $pro_expir = htmlspecialchars($pro_expir,ENT_QUOTES,'UTF-8');

      $dsn = 'mysql:dbname=ankoproduct;host=localhost;charset=utf8';
      $user = 'root';
      $password = '';
      $dbh = new PDO($dsn, $user, $password);
      $dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

      $sql = 'INSERT INTO ankoproduct(name,content,brix,weight,preserve,expir,image)VALUES (?,?,?,?,?,?,?)';
      $stmt = $dbh->prepare($sql);
      $data[] = $pro_name;
      $data[] = $pro_content;
      $data[] = $pro_brix;
      $data[] = $pro_weight;
      $data[] = $pro_preserve;
      $data[] = $pro_expir;
      $data[] = $pro_image_name;
      $stmt->execute($data);

      $dbh = null;

      print $pro_name;
      print 'を登録しました。<br />';

    } catch(Exception $e) { 
      print 'ただいま障害により大変ご迷惑をおかけしております。';
      exit();
    }
  ?>
  <a href="add-pro.php">戻る</a>
</body>
</html>