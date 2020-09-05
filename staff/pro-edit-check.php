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
      // try {
        // require_once('dbconnect.php');
      $pro_id = $_POST['id'];
      $pro_name = $_POST['name'];
      $pro_content = $_POST['content'];
      $pro_brix = $_POST['brix'];
      $pro_weight = $_POST['weight'];
      $pro_preserve = $_POST['preserve'];
      $pro_expir = $_POST['expir'];

      $pro_id = htmlspecialchars($pro_id,ENT_QUOTES,'UTF-8');
      $pro_name = htmlspecialchars($pro_name,ENT_QUOTES,'UTF-8');
      $pro_content = htmlspecialchars($pro_content,ENT_QUOTES,'UTF-8');
      $pro_brix = htmlspecialchars($pro_brix,ENT_QUOTES,'UTF-8');
      $pro_weight = htmlspecialchars($pro_weight,ENT_QUOTES,'UTF-8');
      $pro_preserve = htmlspecialchars($pro_preserve,ENT_QUOTES,'UTF-8');
      $pro_expir = htmlspecialchars($pro_expir,ENT_QUOTES,'UTF-8');

      print '<div class="confirm-content">';
      if($pro_name == "") {
        print '商品名が入力されていません。<br/>';
      } else {
        print '商品名: ';
        print $pro_name;
        print '<br/><br/>';
      }

      if($pro_content == "") {
        print '商品説明文が入力されていません。<br/>';
      } else {
        print '商品説明文:<br/>';
        print $pro_content;
        print '<br/><br/>';
      }

      if($pro_brix == "") {
        print '糖度が入力されていません。<br/>';
      } else {
        print '糖度: ';
        print $pro_brix;
        print '<br/><br/>';
      }

      if($pro_weight == "") {
        print '商品規格が入力されていません。<br/>';
      } else {
        print '商品規格: ';
        print $pro_weight;
        print '<br/><br/>';
      }

      if($pro_preserve == "") {
        print '保存方法が入力されていません。<br/>';
      } else {
        print '保存方法: ';
        print $pro_preserve;
        print '<br/><br/>';
      }

      if($pro_expir == "") {
        print '賞味期限が入力されていません。<br/>';
      } else {
        print '賞味期限: ';
        print $pro_expir;
        print '<br/><br/>';
      }
     
          
      // } catch (Exception $e) {
      //   print 'ただいま障害により大変ご迷惑をおかけしております。';
      //   exit();
      // }
      print '<form method="post" action="pro-edit-done.php" enctype="multipart/form-data">';
      print '<input type="hidden" name="id" value="'.$pro_id.'">';
      print '<input type="hidden" name="name" style="width:300px" value="'.$pro_name.'">';
      print '<input type="hidden" name="content" style="width:300px" value="'.$pro_content.'">';
      print '<input type="hidden" name="brix" style="width: 200px;" value="'.$pro_brix.'">';
      print '<input type="hidden" name="weight" style="width: 200px;" value="'.$pro_weight.'">';
      print '<input type="hidden" name="preserve" style="width: 200px;" value="'.$pro_preserve.'">';
      print '<input type="hidden" name="expir" style="width: 200px;" value="'.$pro_expir.'">';
      print '<input type="submit" value="登録" class="submit-btn"><br/><br/>';
      print '<a href="staff-top.php" class="backlink backstaffmenu" style="height:30px;">スタッフメニューのページへ戻る</a>';
      print '</form>';
      print '</div>';
    ?>
  </div>
  <div class="footer">
    <?php include( dirname(__FILE__) . '../../modules/footer.html'); ?>
  </div>
</body>
</html>