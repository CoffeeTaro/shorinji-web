<!DOCTYPE html>
<html lang="ja">
<head>
<?php
/*
 * ヘッダの読み込み
 */

include 'head.html';
?>
<title>イベント</title>
</head>
<body>
<div id="page_back">
<div id="page">

<header>

<!-- ナビゲーション -->
<?php
/*
 * ナビゲーションを呼び出す
 * ナビゲーションの内容を変更したければnavi.htmlを変更してください
 *
 */

include 'navi.html';
?>

</header>

<main>
<!-- メインコンテンツ -->
<section>
<h1 id="p41">調布祭</h1>
<p>
調布祭では少林寺拳法部は例年<a id='red'>射的</a>をやっています。<br>
皆さん、ぜひ来てくださいね。お待ちしております。
</p>
<div id="center"><img src='./images/chofusai.jpg' width=80%></div>
<h1 id="p42">合宿</h1>
<p>
合宿は毎年、香川県にある本部まで行ってます。
</p>
<img src="images/honbumae.jpg" width=100% alt="香川県にある本部の写真" />
</section>
</main>
<?php
/*
 * サブフレームを呼び出す
 * サブフレームの内容を変更したければsubframe.htmlを変更してください
 *
 */

include 'subframe.html';
?>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>

<?php
	//copyrightの挿入
	include 'footer.html';
?>
</div>
</div>
</body>
</html>