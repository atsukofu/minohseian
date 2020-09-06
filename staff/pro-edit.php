<?php
  session_start();
  session_regenerate_id(true);
  if(isset($_SESSION['login'])==false){
    print 'ログインされていません。<br/>';
    print '<a href="staff-login.php">ログイン画面へ</a>';
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
  <link rel="stylesheet" href="../styles/staff.css">
  <link href="https://use.fontawesome.com/releases/v5.6.1/css/all.css" rel="stylesheet">
</head>
<body>
  <header>
    <?php include( dirname(__FILE__) . '../../modules/header.html'); ?>
  </header>
  <h1 class="title">商品情報編集ページ</h1>
  <div class="customer-form-wrapper">
    <?php 
      try {
        // require_once('dbconnect.php');
        $pro_id = $_GET['id'];

        $dsn = 'mysql:dbname=ankoproduct;host=localhost;charset=utf8';
        $user = 'root';
        $password = '';
        $dbh = new PDO($dsn,$user,$password);
        $dbh->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
        
        $sql = 'SELECT name,content,brix,weight,preserve,expir FROM ankoproduct WHERE id=?';
        $stmt = $dbh->prepare($sql);
        $data[] = $pro_id;
        $stmt->execute($data);

        $rec = $stmt->fetch(PDO::FETCH_ASSOC);
        $pro_name = $rec['name'];
        $pro_content = $rec['content'];
        $pro_brix = $rec['brix'];
        $pro_weight = $rec['weight'];
        $pro_preserve = $rec['preserve'];
        $pro_expir = $rec['expir'];

        $dbh = null;
        
      } catch (Exception $e) {
        print 'ただいま障害により大変ご迷惑をおかけしております。';
        exit();
      }
    ?>
    <form method="post" action="pro-edit-check.php" enctype="multipart/form-data">
      <input type="hidden" name="id" value="<?php print $pro_id; ?>">
      <p class="form-introduction">商品名</p>
      <input type="text" name="name" style="width:300px" value="<?php print $pro_name; ?>"><br/>
      <p class="form-introduction">商品説明文</p>
      <textarea name="content" cols="60" rows="5"><?php print $pro_content;?></textarea>
      <p class="form-introduction">糖度</p>
      <input type="text" name="brix" style="width: 200px;" value="<?php print $pro_brix ?>"><br/>
      <p class="form-introduction">商品規格</p>
      <input type="text" name="weight" style="width: 200px;" value="<?php print $pro_weight ?>"><br/>    
      <p class="form-introduction">保存方法</p>
      <input type="text" name="preserve" style="width: 200px;" value="<?php print $pro_preserve ?>"><br/>
      <p class="form-introduction">賞味期限</p>
      <input type="text" name="expir" style="width: 200px;" value="<?php print $pro_expir ?>"><br>
      <br/>
      <input type="submit" value="登録" class="submit-btn"><br/><br/>
      <a href="staff-top.php" class="backlink backstaffmenu" style="height:30px;">スタッフメニューのページへ戻る</a>
    </form>
  </div>
  <div class="footer">
    <?php include( dirname(__FILE__) . '../../modules/footer.html'); ?>
  </div>
</body>
</html>