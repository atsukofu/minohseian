<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <title>おいしいあんこ屋さん 箕面製餡所</title>
  <link rel="stylesheet" href="styles/index.css">
</head>
<body>
<?php
try{
  $reserve_date = $_POST['reserve_date'];
  $people = $_POST['people'];
  $name = $_POST['name'];
  $tel = $_POST['tel'];

  $reserve_date = htmlspecialchars($reserve_date,ENT_QUOTES,'UTF-8');
  $people = htmlspecialchars($people,ENT_QUOTES,'UTF-8');
  $name = htmlspecialchars($name,ENT_QUOTES,'UTF-8');
  $tel = htmlspecialchars($tel,ENT_QUOTES,'UTF-8');

  
  $dsn ='mysql:dbname=ankoproduct;host=localhost;charset=utf8';
  $user = 'root';
  $password = '';
  $dbh = new PDO($dsn, $user, $password);
  $dbh->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);

  $sql = 'INSERT INTO reservations(reserve_date,people,name,tel) VALUES (?,?,?,?)';
  $stmt = $dbh->prepare($sql);
  $data[] = $reserve_date;
  $data[] = $people;
  $data[] = $name;
  $data[] = $tel;
  $stmt->execute($data);

  $dbh = null;


  print $name;
  print "様 ご予約ありがとうございます！<br />";
  print "料金は当日現金またはクレジットカード払いにて承ります。<br />";
  print "キャンセルされる場合は、2日前までにメールフォーム<br/>またはお電話にてご連絡いただきますよう、よろしくお願いいたします。<br />";
  print '<a href="../index.html">';
  print 'トップページへ戻る';
  print '</a>';

} catch(Exception $e) {
  print 'ただいま障害により大変ご迷惑をおかけしております。';
  exit();
  print '<a href="new-reserve.php">';
  print '予約申込みページへ戻る';
  print '</a>';
}
?>



</body>
</html>
