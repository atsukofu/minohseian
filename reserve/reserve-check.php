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
  <h1 class="title">予約内容の確認</h1>
  <div class="customer-form-wrapper">
    <?php
      $year = $_POST['year'];
      $month = $_POST['month'];
      $day = $_POST['day'];
      $people = $_POST['people'];
      $name = $_POST['name'];
      $tel = $_POST['tel'];

      $year = htmlspecialchars($year,ENT_QUOTES,'UTF-8');
      $month = htmlspecialchars($month,ENT_QUOTES,'UTF-8');
      $day = htmlspecialchars($day,ENT_QUOTES,'UTF-8');
      $people = htmlspecialchars($people,ENT_QUOTES,'UTF-8');
      $name = htmlspecialchars($name,ENT_QUOTES,'UTF-8');
      $tel = htmlspecialchars($tel,ENT_QUOTES,'UTF-8');

      print '<p class="reserve-confirm">';
      print "ご予約日時: $year 年 $month 月 $day 日 14:00~開始 (終了予定は16時です)<br /><br/>";
      print "人数: $people 名様<br /><br/>";
      print "お名前: $name 様<br/><br/>";
      print "お電話番号: $tel<br /><br/>";
      print '</p>';

      $reserve_date = $year.'-'.$month.'-'.$day;

      print '<form method="POST" action="reserve-done.php">';
      print '<input type="hidden" name="reserve_date" value="'.$reserve_date.'">';
      print '<input type="hidden" name="people" value="'.$people.'">';
      print '<input type="hidden" name="name" value="'.$name.'">';
      print '<input type="hidden" name="tel" value="'.$tel.'">';
      print '<input type="button" onclick="history.back()" value="入力画面へ戻る" class="reserve-btn">';
      print '<input type="submit" value="予約を確定する" class="submit-btn">';
      print '</form>';
    ?>
</div>
<div class="footer">
  <?php
    include( dirname(__FILE__) . '../../modules/footer.html');
  ?>
  </div>
</body>
</html>