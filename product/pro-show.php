<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <title>おいしいあんこ屋さん 箕面製餡所</title>
  <link rel="stylesheet" href="styles/index.css">
</head>
<body>
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
  <h1 class="title">商品紹介</h1>
  <?php
  try {
    require_once('dbconnect.php');

    $pro_code = $_GET['proid'];

    // $dsn = 'mysql:dbname=ankoproduct;host=localhost;charset=utf8';
    // $user = 'root';
    // $password = '';
    // $dbh = new PDO($dsn, $user, $password);
    // $dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $sql = 'SELECT name,content,brix,weight,preserve,expir,image FROM ankoproduct WHERE id=?';
    $stmt = $dbh -> prepare($sql);
    $data[] = $pro_code;
    $stmt ->execute($data);

    $rec = $stmt -> fetch(PDO::FETCH_ASSOC);
    $pro_name = $rec['name'];
    $pro_content = $rec['content'];
    $pro_brix = $rec['brix'];
    $pro_weight = $rec['weight'];
    $pro_preserve = $rec['preserve'];
    $pro_expir = $rec['expir'];
    $pro_image = $rec['image'];
    $dbh = null;

    
   
    
  } catch(Exception $e) {
    print 'ただいま障害により大変ご迷惑をおかけしております。';
    exit();
  }
  
  ?>

  <div class="product-wrapper">
    <?php  print '<img src="../gazou/'.$pro_image.'" style="width: 300px; height: 300px;">'; ?>
    <div class="product-detail">
      <div class="product-detail__name">
        <?php print $pro_name ?>
      </div>
      <div class="product-detail__content">
        <?php print $pro_content ?>
      </div>
      <div class="product-detail__table">
        <table border="1">
          <tr>
            <th>糖度
              <td><?php print $pro_brix ?></td>
            </th>
          </tr>
          <tr>
            <th>商品規格
              <td><?php print $pro_weight ?></td>
            </th>
          </tr>
          <tr>
            <th>保存方法
              <td><?php print $pro_preserve ?></td>
            </th>
          </tr>
          <tr>
            <th>賞味期限
              <td><?php print $pro_expir ?></td>       
            </th>
          </tr>
        </table>
      </div>
    </div>
  </div>
  <div class="link-area">
    <a href="pro-index.php" class="backlink">商品一覧へ戻る</a>
    <a href="../contact/contact-new.php" class="backlink">この商品について問い合わせる</a>
  </div>
  </section>
  <div class="footer">
    <?php
      include( dirname(__FILE__) . '../../modules/footer.html');
    ?>
  </div>
  </div>