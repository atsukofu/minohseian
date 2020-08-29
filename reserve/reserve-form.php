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
  <h1 class="title">お客様上情報入力ページ</h1>
  <div class="customer-form-wrapper">
    <?php
      $year = $_GET['year'];
      $month = $_GET['month'];
      $day = $_GET['day'];
      print '<p class="reserve-date">ご予約日:';
      print ''.$year.'年'.$month.'月'.$day.'日 14:00〜';
      print '</p>';
    ?>
    <p class="form-introduction">人数を入力してください(1名〜5名)</p>
    <form method="POST" action="reserve-check.php">
    <select name="people">
    <?php
      for($i = 1; $i <= 5; $i++){
        print '<option name="people" value="'.$i.'"';
        print '>'.$i.'</option>';
      }
    ?>
    </select>
    <p class="form-introduction">お名前を入力してください</p>
    <input type="text" name="name">
    <p class="form-introduction">電話番号を入力してください(ハイフン不要)</p>
    <input type="text" name="tel"><br/><br/>
    <?php
    print '<input type="hidden" name="year" value="'.$year.'">';
    print '<input type="hidden" name="month" value="'.$month.'">';
    print '<input type="hidden" name="day" value="'.$day.'">';
    ?>
    <input type="submit" value="予約する" class="submit-btn">
    </form>
  </div>
  <div class="footer">
    <?php
      include( dirname(__FILE__) . '../../modules/footer.html');
    ?>
  </div>
</body>
</html>