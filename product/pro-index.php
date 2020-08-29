<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <title>おいしいあんこ屋さん 箕面製餡所</title>
  <link rel="stylesheet" href="../styles/index.css">
  <link rel="stylesheet" href="../styles/reserve.css">
  <link rel="stylesheet" href="../styles/product.css">
  <link href="https://use.fontawesome.com/releases/v5.6.1/css/all.css" rel="stylesheet">
</head>
<body>
  <header>
  <?php
    include( dirname(__FILE__) . '../../modules/header.html');
  ?>
  </header>
  <section>
  <h1 class="title">商品一覧</h1>
  <div class="promotion">
      <div class="promotion__content">
        箕面製餡所の美味しい定番あんこ達を紹介します。<br/>
        減農薬・有機肥料にこだわり生産を続ける<br/>
        北海道十勝の契約農家から仕入れた小豆を使用しています。<br/><br/>
        掲載商品の他にも特注商品を含め、<br/>
        年間約100種の商品を開発・ご提案しております。<br/>
        こだわりのあんこ・季節のあんこ・あんこについてはぜひ<br/>
        箕面製餡所にご相談ください！
      </div>
      <img src="../images/promotion.png" class="promotion__img">
  </div>
  <div class="products-wrapper">
    <?php
    try {
      
      $dsn = 'mysql:dbname=ankoproduct;host=localhost;charset=utf8';
      $user = 'root';
      $password = '';
      $dbh = new PDO($dsn, $user, $password);
      $dbh->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
      
      $sql = 'SELECT id,name,image FROM ankoproduct WHERE 1';
      $stmt = $dbh->prepare($sql);
      $stmt->execute();
      
      $dbh = null;
      
      while(true) {
        $rec = $stmt->fetch(PDO::FETCH_ASSOC);
        if($rec==false){
        break;
      }
      print '<div class="products">';
      print '<img src="../gazou/'.$rec['image'].'" class="products-index-image">';
      print '<div class="products-name-area">';
      print '<p class="products-name">';
      print $rec['name'];
      print '</p>';
      print '<i class="fas fa-chevron-circle-right"></i>';
      print '<a href="pro-show.php?proid='.$rec['id'].'" class="products-show-link">';
      print '商品詳細を見る';
      print '</a>';
      print '</div>';
      print '</div>';
    }
    
  } catch(Exception $e) {
    print 'ただいま障害により大変ご迷惑をおかけしております。';
    exit();
  }
  
  ?>
  </div>
  </section>
  <div class="footer">
    <?php
      include( dirname(__FILE__) . '../../modules/footer.html');
    ?>
  </div>
</body>
</html>