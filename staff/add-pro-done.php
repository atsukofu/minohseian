<?php
  ini_set('display_errors', "On");
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
  <link href="https://use.fontawesome.com/releases/v5.6.1/css/all.css" rel="stylesheet">
</head>
<body>
<header>
  <?php
    include( dirname(__FILE__) . '../../modules/header.html');
  ?>
</header>
<section> 
  <h2 class="title">登録完了</h2>
  <div class="customer-form-wrapper">
    <?php
      include( dirname(__FILE__) . '../../vendor/autoload.php');
      // use Aws\S3\S3Client;
    try {
      require_once('dbconnect.php');

      $pro_name = $_POST['name'];
      $pro_content = $_POST['content'];
      $pro_brix = $_POST['brix'];
      $pro_weight = $_POST['weight'];
      $pro_preserve = $_POST['preserve'];
      $pro_expir = $_POST['expir'];
      $pro_image_name = $_POST['image_name'];

      $pro_name = htmlspecialchars($pro_name,ENT_QUOTES,'UTF-8');
      $pro_content = htmlspecialchars($pro_content,ENT_QUOTES,'UTF-8');
      $pro_brix = htmlspecialchars($pro_brix,ENT_QUOTES,'UTF-8');
      $pro_weight = htmlspecialchars($pro_weight,ENT_QUOTES,'UTF-8');
      $pro_preserve = htmlspecialchars($pro_preserve,ENT_QUOTES,'UTF-8');
      $pro_expir = htmlspecialchars($pro_expir,ENT_QUOTES,'UTF-8');

      // $dsn = 'mysql:dbname=ankoproduct;host=localhost;charset=utf8';
      // $user = 'root';
      // $password = '';
      // $dbh = new PDO($dsn, $user, $password);
      // $dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

      $sql = 'INSERT INTO ankoproduct(name,content,brix,weight,preserve,expir,image)VALUES (?,?,?,?,?,?,?)';
      $stmt = $dbh->prepare($sql);
      $data[] = $pro_name;
      $data[] = $pro_content;
      $data[] = $pro_brix;
      $data[] = $pro_weight;
      $data[] = $pro_preserve;
      $data[] = $pro_expir;
      $data[] = $pro_image_name;
      $stmt->execute($data);

      
      // $bucket = 'AWS_BUCKET_BUCKET';
      // $key = 'AWS_ACCESS_KEY_ID';
      // $secret = 'AWS_SECRET_ACCESS_KEY';
      // // S3クライアントを作成
      // $s3 = new S3Client(array(
      //   'version' => 'latest',
      //   'credentials' => array(
      //     'key' => $key,
      //     'secret' => $secret,
      //   ),
      //   'region'  => 'ap-northeast-1', // 東京リージョン
      // ));
      // print 'AWS';
      
      // // アップロードされた画像の処理
      // // $file = $_FILES['file']['tmp_name'];
      // $file = $pro_image_name;
      // if (!is_uploaded_file($file)) {
      //   return;
      // }
      // print 'image';
      
      // // S3バケットに画像をアップロード
      // $result = $s3->putObject(array(
      //   'Bucket' => $bucket,
      //   'Key' => $file,
      //   'ContentType' => 'image/jpeg',
      //   'SourceFile'   => '../gazou/'.$file,
      //   'ACL' => 'public-read', // 画像は一般公開されます
      // ));
      // print 'bucket';
      
      // // 結果を表示
      // print "<pre>";
      // var_dump($result);
      // print "</pre>";
      
      $dbh = null;
      
      print $pro_name;
      print 'を登録しました。<br /><br/>';

  } catch(Exception $e) { 
    print 'ただいま障害により大変ご迷惑をおかけしております。';
    exit();
  }
  ?>
  <a href="add-pro.php" class="backlink">戻る</a>
  </div>
  </section>
  <div class="footer">
  <?php
    include( dirname(__FILE__) . '../../modules/footer.html');
  ?>
</div>
</body>
</html>