<?php
//以下日付を自動表示するプログラム
date_default_timezone_set ('Asia/Tokyo');
$month = date("n");
$day = date("j", strtotime('+1 day'));
?>

<!DOCTYPE html>
<html>
<head lang="ja">
<meta charset="utf-8">
<meta name="viewport" content="width=device-width">
<title>B-Plant / 時間割</title>
</head>
<body>
<div align="center">
<header>

<!--ここから3行log-->
<b><font color="red">C</font>
<font color="red">O</font>
<font color="blue">L</font>
<font color="yellow">O</font>
<font color="green">R</font>
<font color="brown">F</font>
<font color="orange">U</font>
<font color="pink">L</font></b><br>
</header><br>

<!--ここから時間割-->
<table border="1" width="250" cellpadding="3">
<tr align="center">
<th colspan="3"><?php echo $month ?>/<?php echo $day ?>の時間割</th>
</tr>
<tr>
<td></td><th>教科</th><th>持ち物</tんがh>
</tr>
<tr>
<th>1</th><td>数学</td><td>技</td>
</tr>
<tr>
<th>2</th><td>理科</td><td>イヤホン</td>
</tr>
<tr>
<th>3</th><td>社会</td><td>奥村の初恋</td>
</tr>
<tr>
<th>4</th><td>美術</td><td>作品</td>
</tr>
<tr>
<th>5</th><td>英語</td><td>農家</td>
</tr>
<tr>
<th>6</th><td>集会</td><td>　</td>
</tr>
</table>

<br>
<font color="red" size="+1">弁当が必要！</font>
<br>

<details><summary><font size="-1">時間割掲載サービスの利用にあたって</font></summary>
<table border="1" width="280" bgcolor="#f5f5f5">
<tr><td><div align="left">
<font size="-2"><ol><li>時間割掲載サービスを利用する際は、この規約を確認し了承したこととします。</li>
<li>利用者へ予告なく時間割の掲載を数日間停止する場合があります。</li>
<li>掲載サービスによる持ち物の失念などは、いかなる場合であっても管理者は一切責任を負いません。</li>
</ol></font></div>
</td></tr>
</table>
</details>

<footer>
<br>
<a href="./pics">2Bギャラリー<!--<font size="-2" color="red">[NEW! 更新しました]--></font></a><br>
<a href="./birthday">加藤先生誕生日サプライズ</a><br><br>
<a href="../index.html"><img src="../images/1x/B-logo.png" width="4%" height="4%"></img></a><br>
<a href="http://archetype.starfree.jp/"><img src="../images/logo-nonsvg.png" width="140px" height="70px"></img></a><br>
</footer><br>

</div>
</body>
</html>