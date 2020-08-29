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
  <section>
  <h1 class="title">スタッフ登録確認</h1>
  <div class="customer-form-wrapper" style="padding-left: 300px;">
  <?php
    $staff_name = $_POST['name'];
    $staff_pass = $_POST['password'];
    $staff_pass2 = $_POST['password2'];

    $staff_name = htmlspecialchars($staff_name,ENT_QUOTES,'UTF-8');
    $staff_pass = htmlspecialchars($staff_pass,ENT_QUOTES,'UTF-8');
    $staff_pass2 = htmlspecialchars($staff_pass2,ENT_QUOTES,'UTF-8');

    if($staff_name == ""){
      print 'スタッフ名が入力されていません<br/>';
    } else {
      print 'スタッフ名：';
      print $staff_name;
      print '<br/>';
    }

    if($staff_pass == ""){
      print 'パスワードが入力されていません。<br/>';
    } 

    if($staff_pass != $staff_pass2) {
      print 'パスワードが一致しません。<br/>';
    }

    if($staff_name == "" || $staff_pass == "" || $staff_pass != $staff_pass2){
      print '<form>';
      print '<input type="button" oclick="history.back()" value="戻る">';
      print '</form>';
    } else {
      $staff_pass = md5($staff_pass);
      print '<form method="post" action="staff-add-done.php">';
      print '<input type="hidden" name="name" value="'.$staff_name.'">';
      print '<input type="hidden" name="password" value="'.$staff_pass.'">';
      print '<br/>';
      print '<input type="submit" value="登録する" class="submit-btn">';
      print '</form>';
    }
    
?>
</section>
  <div class="footer">
    <?php
      include( dirname(__FILE__) . '../../modules/footer.html');
    ?>
  </div>
</body>
</html>