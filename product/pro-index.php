<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <title>おいしいあんこ屋さん 箕面製餡所</title>
  <link rel="stylesheet" href="styles/index.css">
</head>
<body>
  <?php
    // try {
      $dsn = 'mysql:dbname=ankoproduct;host=localhost;charset=utf8';
      $user = 'root';
      $password = '';
      $dbh = new PDO($dsn, $user, $password);
      $dbh->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);

      $sql = 'SELECT id,name,image FROM ankoproduct WHERE 1';
      $stmt = $dbh->prepare($sql);
      $stmt->execute();

      $dbh = null;

      
      print '商品一覧 <br/>';

      while(true) {
        $rec = $stmt->fetch(PDO::FETCH_ASSOC);
        if($rec==false){
        break;
        }
        print '<div class="product">';
        print '<div>';
        print '<a href="pro-show.php?proid='.$rec['id'].'">';
        print $rec['name'];
        print '<img src="../gazou/'.$rec['image'].'">';
        print '</a>';
        print '<br/>';
      }

    // } catch(Exception $e) {
    //   print 'ただいま障害により大変ご迷惑をおかけしております。';
    //   exit();
    // }
  ?>
</body>
</html>