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
    <?php include( dirname(__FILE__) . '../../modules/header.html'); ?>
  </header>
  <h1 class="title">手作り和菓子教室のご案内</h1>
  <div class="reserve-content-wrapper">
    <div class="reserve-content">
      箕面製餡では、毎週土曜日に手作りお菓子教室を<br/>
      開催しています。<br/><br/>
      家族での思い出づくりや大切なひとのプレゼントに、<br>
      美味しい和菓子を手作りしてみませんか？<br/>
      作った和菓子は教室内での試食の他に、<br/>
      専用の容器に入れてお持ち帰りもして頂けます。<br/><br/>
      親子や友達同士誘い合ってぜひご参加ください。<br/>
      お一人様の参加も大歓迎です。<br/>
    </div>
    <img src="../images/cooking.png" width="400px" height="300px">
  </div>
  <div class="reserve-table">
    <table border="1">
      <tr class="column-title">
        <th width="170px" height="45px" >開始時間</th>
        <th width="170px" height="45px">料金</th>
        <th width="170px" height="45px">持ち物</th>
        <th width="170px" height="45px">人数</th>
      </tr>
      <tr>
        <td height="45px">14:00~</td>
        <td height="45px">1500円 / お一人様</td>
        <td height="45px">エプロン</td>
        <td height="45px">1組1〜5名様(3組限定)</td>
      </tr>
    </table>
  </div>
  

  <h3 class="calendar-title">カレンダーを表示する月を選んでください。</h3>
  <?php
if(isset($_POST['yyyy']) && $_POST['yyyy'] != '' && isset($_POST['mm']) != ''){
  $yyyy = $_POST['yyyy'];
  $mm = $_POST['mm'];
} else {
  $yyyy = date('Y');
  $mm = date('m');
}

$dd = 1;
?>

<div class="calendar-form">
  <div class="calendar-select-form">
    <form method="POST" action="<?php $_SERVER['PHP_SELF']; ?>" padding-left="20px">
      <select name="yyyy" class="calendar-selectbox">
        <?php
      $thisYear = date('Y');
      $nextYear = $thisYear+1;
      print '<option value="'.$thisYear.'"';if($thisYear == $yyyy) echo ' selected';echo '>'.$thisYear.'</option>'."\n";
      print '<option value="'.$nextYear.'"';if($nextYear == $yyyy) echo ' selected';echo '>'.$nextYear.'</option>'."\n";
      ?>
    </select>年
    
    <select name="mm" class="calendar-selectbox">
      <?php
        for($i = 1; $i <= 12; $i++){
          print '<option value="'.$i.'"';
          if($i == $mm) echo ' selected';
          print '>'.$i.'</option>'."\n";
        }
        ?>
    </select>月
    
    <input type="submit" value="送信" class="calendar-submit">
  </form>
</div>
  <br/>
  <br/>
  <!-- 関数定義 -->
  <?php
    function calendar($yyyy, $mm, $dd){
      $iSctDayTimeStamp = mktime(0,0,0,$mm,$dd,$yyyy);
    }
  ?>
  <table border="0" bgcolor="#cccccc" cellspacing="1" class="calendar-table">
    <?php
    // 月列
      if(checkdate($mm, 1, $yyyy)){
    ?>
      <tr>
        <td bgcolor="#ffffff" colspan="7">
          <?php print $yyyy; ?>年<?php print $mm; ?>月 
        </td>
      </tr>

      <?php
      }
      ?>

      <tr>
        <td width="46px" height="40px" bgcolor="#ffd0d0">日</td>
        <td width="46px" height="40px" bgcolor="#f7ffde">月</td>
        <td width="46px" height="40px" bgcolor="#f7ffde">火</td>
        <td width="46px" height="40px" bgcolor="#f7ffde">水</td>
        <td width="46px" height="40px" bgcolor="#f7ffde">木</td>
        <td width="46px" height="40px" bgcolor="#f7ffde">金</td>
        <td width="46px" height="40px" bgcolor="#def9ff">土</td>
      </tr>

    <?php
      // 1日の曜日を数字で取得
      $iWNoMthFst = date('w', mktime(0,0,0, $mm,1,$yyyy));

      // 日付が始まる前の空白
      for($iFstWeekBnk = 0; $iFstWeekBnk < $iWNoMthFst; $iFstWeekBnk++){

        print '<td align="center" bgcolor="#FFFFFF"></td>';
  
      }

    // 日付記述の繰り返し処理 存在する日付である限りループする
    for($dd = 1; checkdate($mm, $dd, $yyyy); $dd++){
      // 本日のマーク
      $iTodayTimeStamp = mktime(0, 0, 0, date('m'), date('d'),date('Y'));
      // 指定年月のループ日付のタイムスタンプ
      $iDisplayDaysTimeStamp = mktime(0, 0, 0, $mm, $dd, $yyyy);

      // 1日が日曜日の時1,8,15,22,29 == 1となる
      // 日曜日
      if(($dd + $iWNoMthFst)%7 == 1){
        echo '<tr><td height="40px" bgcolor="';
        // 本日
        if($iTodayTimeStamp == $iDisplayDaysTimeStamp) echo '#ffe293';
        else echo '#ffd0d0';
        ?>
        ">
        <?php echo $dd; ?></td>
        <?php
      }
      // 土曜日
      elseif(($dd+$iWNoMthFst)%7 == 0){
        echo '<td height="40px"bgcolor="';
        // 本日
        if($iTodayTimeStamp == $iDisplayDaysTimeStamp) echo '#ffe293';
        else echo '#def9ff';
        ?>
      ">
        <?php 
          print '<a href="reserve-form.php?year='.$yyyy.'&month='.$mm.'&day='.$dd.'">';
          print $dd;
          print '</a>';
        ?></td></tr>
        <?php
      }
      // 平日
      else {
        echo '<td height="40px" bgcolor="';
        // 本日
        if($iTodayTimeStamp == $iDisplayDaysTimeStamp) echo '#ffe293';
        else echo '#ffffff';
        ?>
        "><?php echo $dd; ?></td>
      <?php
      }
    } 
    // 指定月最終日の曜日$ddは32になっている
    $iWNoMthEnd = date('w', mktime(0, 0, 0, $mm, $dd, $yyyy));
    if($iWNoMthEnd != 0){
      // もし32が日曜日すなわち0ならそれで終了
      for($iWeekBlank = 0; $iWeekBlank < 7-$iWNoMthEnd; $iWeekBlank++) {
        // 0以外は が必要
        echo '<td align="center" bgcolor="#ffffff"> </td>';
      }
    }
  ?>    
  </table>
  <?php
  calendar($yyyy, $mm, $dd);
  ?>
</div>
<div class="footer">
    <div class="footer-top">
      <ul class="footer-list">
        <li><a href="/minohseian/index.html">HOME</a></li>
        <li><a href="#">会社概要</a></li>
        <li><a href="/minohseian/product/pro-index.php">商品紹介</a></li>
        <li><a href="/minohseian/reserve/new-reserve.php">和菓子教室</a></li>
        <li><a href="/minohseian/contact/contact-new.html">お問い合わせ</a></li>
        <li><a href="#">STAFF</a></li>
      </ul>
      <div class="footer-company-wrapper">
        <img src="../images/footer_logo.png" class="footer-logo">
        <div class="footer-address">〒590-0021<br/>大阪府箕面市みのお台<br/>1丁目23番</div>
      </div>
      </div>
    <div class="footer-bottom">
      Copyright (c) 箕面製饀所 Co., Ltd All rights reserved.
    </div>
  </div>


</body>
</html>