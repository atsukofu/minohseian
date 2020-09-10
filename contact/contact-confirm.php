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
  <h1 class="title">お問い合わせ内容確認</h1>
  <div class="customer-form-wrapper">
    <p>以下の内容で送信いたします。</p><br />
  <?php
    $contact_company = $_POST['company'];
    $contact_name = $_POST['name'];
    $contact_email = $_POST['email'];
    $contact_content = $_POST['content'];

    $contact_company = htmlspecialchars($contact_company,ENT_QUOTES,'UTF-8');
    $contact_name = htmlspecialchars($contact_name,ENT_QUOTES,'UTF-8');
    $contact_email = htmlspecialchars($contact_email,ENT_QUOTES,'UTF-8');
    $contact_content = htmlspecialchars($contact_content,ENT_QUOTES,'UTF-8');

    if($contact_company != ""){
      print "会社名: ";
      print $contact_company;
      print '<br /><br />';
    }

    if($contact_name == ""){
      print "お名前を入力してください";
    } else {
      print "お名前: ";
      print $contact_name;
      print '様<br /><br />';
    }
  
    if($contact_email == ""){
      print "メールアドレスを入力してください。";
    } else {
      print "メールアドレス: ";
      print $contact_email;
      print '<br/><br />';
    }

      if($contact_content == ""){
        print "お問い合わせ内容を入力してください";
      } else {
        print "お問い合わせ内容<br />";
        print $contact_content;
        print '<br /><br />';
      }

    if($contact_name == "" || $contact_email == "" || $contact_content == ""){
      print '<input type="button" onclick="history.back()" value="戻る">';
    } else {
      print '<form action="mailto.php" method="post">';
      print '<input type="hidden" name="company" value="'.$contact_company.'">';
      print '<input type="hidden" name="name" value="'.$contact_name.'">';
      print '<input type="hidden" name="email" value="'.$contact_email.'">';
      print '<input type="hidden" name="content" value="'.$contact_content.'">';
      print '<input type="submit" value="送信する">';
      print '</form>';
    }

  ?>
  </div>
  </form>
  <div class="footer">
  <?php
    include( dirname(__FILE__) . '../../modules/footer.html');
  ?>
  </div>
</body>
</html>