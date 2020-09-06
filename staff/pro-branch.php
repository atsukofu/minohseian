<?php
  session_start();
  session_regenerate_id(true);
  if(isset($_SESSION['login'])==false){
    print 'ログインされていません。<br/>';
    print '<a href="staff-login.php">ログイン画面へ</a>';
    exit();
  }

  if(isset($_POST['edit']) == true){
    $pro_id = $_POST['id'];
    header('Location:pro-edit.php?id='.$pro_id);
    exit();
  }

  if(isset($_POST['delete']) == true){
    $pro_id = $_POST['id'];
    header('Location:pro-delete-check.php?id='.$pro_id);
    exit();
  }
?>
