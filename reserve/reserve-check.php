<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <title>おいしいあんこ屋さん 箕面製餡所</title>
  <link rel="stylesheet" href="styles/index.css">
</head>
<body>
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

  print '手作り和菓子教室 予約内容確認<br/>';
  print "ご予約日時: $year 年 $month 月 $day 日 14:00~開始 (終了予定は16時です)<br />";
  print "人数: $people 名様<br />";
  print "お名前: $name 様<br/>";
  print "お電話番号: $tel";

  print '<form method="POST" action="reserve-done.php">';
  print '<input type="hidden" name="year" value="'.$year.'">';
  print '<input type="hidden" name="month" value="'.$month.'">';
  print '<input type="hidden" name="day" value="'.$day.'">';
  print '<input type="hidden" name="people" value="'.$people.'">';
  print '<input type="hidden" name="name" value="'.$name.'">';
  print '<input type="hidden" name="tel" value="'.$tel.'">';
  print '<input type="button" onclick="history.back()" value="入力画面へ戻る">';
  print '<input type="submit" value="予約を確定する">';
  print '</form>';

?>
</body>
</html>