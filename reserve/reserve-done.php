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
  <h1 class="title">ご予約ありがとうございます。</h1>
  <div class="customer-form-wrapper">
    <?php
      $db = parse_url($_SERVER['CLEARDB_DATABASE_URL']);
      $db['dbname'] = ltrim($db['path'], '/');
      $dsn = "mysql:host={$db['host']};dbname={$db['dbname']};charset=utf8";
    try{
      require_once('dbconnect.php');

      $reserve_date = $_POST['reserve_date'];
      $people = $_POST['people'];
      $name = $_POST['name'];
      $tel = $_POST['tel'];

      $reserve_date = htmlspecialchars($reserve_date,ENT_QUOTES,'UTF-8');
      $people = htmlspecialchars($people,ENT_QUOTES,'UTF-8');
      $name = htmlspecialchars($name,ENT_QUOTES,'UTF-8');
      $tel = htmlspecialchars($tel,ENT_QUOTES,'UTF-8');

      
    
      // $db = new PDO($dsn, $db['user'], $db['pass']);
      // $db->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
      // $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRORMODE_EXCEPTION);
  

      $sql = 'INSERT INTO reservations(reserve_date,people,name,tel) VALUES (?,?,?,?)';
      $stmt = $dbh->prepare($sql);
      $data[] = $reserve_date;
      $data[] = $people;
      $data[] = $name;
      $data[] = $tel;
      $stmt->execute($data);

      $dbh = null;

      print '<p class="reserve-confirm">';
      print $name;
      print "様 ご予約ありがとうございます！<br /><br/>";
      print "料金は当日現金またはクレジットカード払いにて承ります。<br /><br/>";
      print "キャンセルされる場合は、2日前までにメールフォーム<br/><br/>またはお電話にてご連絡いただきますよう、よろしくお願いいたします。<br /><br/>";
      print '<a href="/index.html" class="backlink">';
      print 'トップページへ戻る';
      print '</a>';
      print '</p>';

    } catch(Exception $e) {
      print 'ただいま障害により大変ご迷惑をおかけしております。';
      exit();
      print '<a href="new-reserve.php">';
      print '予約申込みページへ戻る';
      print '</a>';
    }
    ?>
</div>
<div class="footer">  
  <?php
    include( dirname(__FILE__) . '../../modules/footer.html');
  ?>
</div>

</body>
</html>
