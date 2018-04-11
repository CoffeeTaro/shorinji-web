<!DOCTYPE html>
<html lang="ja">
<head>
<?php
/*
 * ヘッダの読み込み
 */

include 'head.html';
?>

<!-- スライドショーのためのスクリプト -->
<script type="text/javascript" src="jquery.flexslider-min.js"></script>
<script type="text/javascript">
    $(window).load(function() {
      $('.flexslider').flexslider({
        animation: "slide",
        controlsContainer: ".flexslider-container",
        directionNav: false,
        controlNav: false,
      });
    });
  </script>

<title>電気通信大学 少林寺拳法部 トップページ</title>
</head>
<body>
<div id="page_back">
<div id="page">

<header>
<!-- タイトル画像とナビゲーション -->
<?php
/*
 * タイトル画像とナビゲーションを呼び出す
 * ナビゲーションの内容を変更したければnavi.htmlを変更してください
 *
 */

include 'navi.html';
?>


</header>

<main>
<div id="pc">
    <!-- スライドショー -->
    <div class="flexslider-container">
        <div class="flexslider">
            <ul class="slides">
                <li><img src="images/shuugoushasin.jpg" width=650px /></li>
                <li><a href=for_newcomers.php><img src="images/新入部員募集中.jpg" width=650px /></a></li>
            </ul>
        </div>
    </div>

</div>

    <!-- メインコンテンツ -->
    <section>
        <h1 id="p11">初めてご覧になる方へ</h1>
        <p>
        皆さんこんにちは！<br>
        電通大少林寺拳法部公式サイトにお越しいただきありがとうございます。<br>
        ここでは、電気通信大学 少林寺拳法部の事を余すことなく知っていただきたいと思ってます。<br>
        まだ少林寺拳法について良く知らない、という方は、はじめに「<a href="point.php">少林寺拳法とは</a>」をご覧ください！<br>
        </p>
        <h1 id="p12">新入部員募集中!!</h1>
        <p>
        男女共に活躍中です!大学から新しいことを始めたい方、護身術として学びたい方、
        性別問わず、初心者大歓迎です！見学・体験を希望の方は、下記のメールアドレスへご連絡ください!!!<br>
        詳しいことは<a href=for_newcomers.php>こちら</a>をお読み下さい。
        </p>

        <h1 id="p13">メールアドレス</h1>
        <p>
        質問等は下のメールアドレスに送ってください。
        </p>
        <img src="images/mailad.png" alt="電気通信大学少林寺拳法部のメールアドレス" width=80%>

        <section>
            <h1 id="p14">更新履歴</h1>
            2017-03-29 情報を更新しました．<br>
            2016-03-23 デザイン、内容ともに新しくなりました。スマートフォン、タブレットにも対応しました。<br>
            2015-09-30 文章の修正。旧公式サイトの閉鎖。<br>
            2015-09-28 公式サイト新設<br>
            <br>
            <br>
            <br>
        </section>
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

<?php
    //copyrightの挿入
    include 'footer.html';
?>
</div>
</div>
</body>
</html>
