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

      $dsn = 'mysql:dbname=ankoproduct;host=localhost;charset=utf8';
      $user = 'root';
      $password = '';
      $dbh = new PDO($dsn, $user, $password);
      $dbh->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);

      $sql = 'SELECT id,reserve_date,people,name,tel FROM reservations WHERE 1 ORDER BY reserve_date ASC';
      $stmt = $dbh->prepare($sql);
      $stmt->execute();

      $dbh = null;

      print '<h2>手作り和菓子教室 ご予約一覧</h2>';
      print '<table border="1">';
      print '<tr>';
      print '<th>日付</th>';
      print '<th>人数</th>';
      print '<th>ご予約名</th>';
      print '<th>お電話番号</th>';
      print '</tr>';
      while(true) {
        $rec = $stmt->fetch(PDO::FETCH_ASSOC);
        if($rec==false){
        break;
        }
        print '<tr>';
        print '<td>'.$rec['reserve_date'].'</td>';
        print '<td>'.$rec['people'].'名</td>';
        print '<td>'.$rec['name'].'様</td>';
        print '<td>'.$rec['tel'].'</td>';
        print '</tr>';
      }
      print '</table>';

      } catch(Exception $e) {
        print 'ただいま障害により大変ご迷惑をおかけしております。';
        exit();
      }

      ?>

    </body>
    </html>