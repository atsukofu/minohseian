<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <title>おいしいあんこ屋さん 箕面製餡所</title>
  <link rel="stylesheet" href="styles/index.css">
</head>
<body>
  <h2>以下の内容で送信します。</h2>
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
      print '<br />';
    }

    if($contact_name == ""){
      print "お名前を入力してください";
    } else {
      print "お名前: ";
      print $contact_name;
      print '様<br />';
    }
  
    if($contact_email == ""){
      print "メールアドレスを入力してください。";
    } else {
      print "メールアドレス: ";
      print $contact_email;
      print '<br/>';
    }

      if($contact_content == ""){
        print "お問い合わせ内容を入力してください";
      } else {
        print "お問い合わせ内容<br />";
        print $contact_content;
        print '<br />';
      }

    if($contact_name == "" || $contact_email == "" || $contact_content == ""){
      print '<input type="button" onclick="history.back()" value="戻る">';
    } else {
      print '<form action="mailto.php">';
      print '<input type="hidden" name="company" value="'.$contact_company.'">';
      print '<input type="hidden" name="name" value="'.$contact_name.'">';
      print '<input type="hidden" name="email" value="'.$contact_email.'">';
      print '<input type="hidden" name="content" value="'.$contact_content.'">';
      print '<input type="submit" value="送信する">';
      print '</form>';
    }

  ?>
  </form>
</body>
</html>