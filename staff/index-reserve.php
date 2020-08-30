<?php
  session_start();
  session_regenerate_id(true);
  if(isset($_SESSION['login'])==false){
    print 'ログインされていません。<br/>';
    print '<a href="staff-login.html">ログイン画面へ</a>';
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
    <?php include( dirname(__FILE__) . "../../modules/header.html"); ?>
  </header>
  <h2 class="title">教室予約一覧</h2>
  <div class="reserve-index">
    <a href="staff-top.php" class="backlink backstaffmenu" style="height:30px;">スタッフメニューのページへ戻る</a>
    <div class="reserve-table">
      <?php
        try {
          require_once('dbconnect.php');
          
          // $dsn = 'mysql:dbname=ankoproduct;host=localhost;charset=utf8';
          // $user = 'root';
          // $password = '';
          // $dbh = new PDO($dsn, $user, $password);
          // $dbh->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
          
          $sql = 'SELECT id,reserve_date,people,name,tel FROM reservations WHERE 1 ORDER BY reserve_date ASC';
          $stmt = $dbh->prepare($sql);
          $stmt->execute();
          
          $dbh = null;
          
          print '<table border="1">';
          print '<tr style="background-color:#e6b9b8;color:#fff;text-align:center;">';
          print '<th style="width:200px; text-align:center;" >日付</th>';
          print '<th style="width:80px; text-align:center;">人数</th>';
          print '<th style="width:200px; text-align:center;">ご予約名</th>';
          print '<th style="width:200px; text-align:center;">お電話番号</th>';
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
    </div>
    <a href="staff-top.php" class="backlink backstaffmenu" style="height:30px;">スタッフメニューのページへ戻る</a>
  </div>
  <div class="footer">
    <?php
      include( dirname(__FILE__) . '../../modules/footer.html');
    ?>
  </div>
  </body>
</html>