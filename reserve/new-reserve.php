<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <title>おいしいあんこ屋さん 箕面製餡所</title>
  <link rel="stylesheet" href="styles/index.css">
</head>
<body>
<h3>カレンダー年月選択</h3>
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

<form method="POST" action="<?php $_SERVER['PHP_SELF']; ?>">
  <select name="yyyy">
    <?php
     $thisYear = date('Y');
     $nextYear = $thisYear+1;
      print '<option value="'.$thisYear.'"';if($thisYear == $yyyy) echo ' selected';echo '>'.$thisYear.'</option>'."\n";
      print '<option value="'.$nextYear.'"';if($nextYear == $yyyy) echo ' selected';echo '>'.$nextYear.'</option>'."\n";
    ?>
  </select>年

  <select name="mm">
    <?php
      for($i = 1; $i <= 12; $i++){
        print '<option value="'.$i.'"';
        if($i == $mm) echo ' selected';
        print '>'.$i.'</option>'."\n";
      }
    ?>
  </select>月

  <input type="submit" value="送信">
</form>

<h3>カレンダー</h3>
<!-- 関数定義 -->
<?php
  function calendar($yyyy, $mm, $dd){
    $iSctDayTimeStamp = mktime(0,0,0,$mm,$dd,$yyyy);
  }
?>
<table border="0" bgcolor="#cccccc" cellspacing="1">
  <?php
  // 月列
    if(checkdate($mm, 1, $yyyy)){
  ?>
    <tr>
      <td bgcolor="#ffffff" colspan="7">
        <?php print $yyyy; ?>年<?php print $mm; ?>月 (<?php print date('t', mktime(0,0,0, $mm, 1, $yyyy)); ?>日間)
      </td>
    </tr>

    <?php
    }
    ?>

    <tr>
      <td bgcolor="#ffd0d0">日</td>
      <td bgcolor="#f7ffde">月</td>
      <td bgcolor="#f7ffde">火</td>
      <td bgcolor="#f7ffde">水</td>
      <td bgcolor="#f7ffde">木</td>
      <td bgcolor="#f7ffde">金</td>
      <td bgcolor="#def9ff">土</td>
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
      echo '<tr><td bgcolor="';
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
      echo '<td bgcolor="';
      // 本日
      if($iTodayTimeStamp == $iDisplayDaysTimeStamp) echo '#ffe293';
      else echo '#def9ff';
      ?>
     ">
      <?php 
        print '<a href="reserve-form.php?year='.$yyyy.'month='.$mm.'date='.$dd.'">';
        print $dd;
        print '</a>';
       ?></td></tr>
      <?php
    }
    // 平日
    else {
      echo '<td bgcolor="';
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



</body>
</html>