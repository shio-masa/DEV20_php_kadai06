<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <title>ランキング登録</title>
  <link rel="stylesheet" href="css/style.css">
  <style>div{padding:auto;  font-size:16px;}</style>
</head>
<body>
<!-- Head[Start] -->
<header>
<div class="top">
  <div class="plate" id="mesiran">
  <h1 class="top_title">Vaccine Log</h1>
  </div>
  <p class="top_word">ワクチン接種記録を残しましょう<br>
ワクチン接種記録を仲間内で供有できます<br>
もしもの時に役立つかも知れません！</p>
</div>
</header>
<!-- Head[End] -->
<!-- Main[Start] -->
<!-- ここからinsert.phpにデータを送ります -->
<form method="post" action="insert.php">
  <div class="ranking">
   <fieldset>
    <legend><h2>接種記録</h2></legend>
     <label>氏名：<input type="varchar" size="40" name="name"></label><br><br>
     <label>接種回：<input type="int" name="times"></label>
     <label>ワクチン種別：<input type="varchar" name="vaccine_kinds"></label>
     <label>　日時：<input type="date" name="indate"></label><br>
     <label>接種回：<input type="int" name="times"></label>
     <label>ワクチン種別：<input type="varchar" name="vaccine_kinds"></label>
     <label>　日時：<input type="date" name="indate"></label><br>
     <label>接種回：<input type="int" name="times"></label>
     <label>ワクチン種別：<input type="varchar" name="vaccine_kinds"></label>
     <label>　日時：<input type="date" name="indate"></label><br>
     <label>　コメント(副反応など）：<input type="text" name="comments"></label><br>
     <input type="submit" value="送信">
    </fieldset>
  </div>
</form><br>
  <nav class="navbar navbar-default">
    <div class="container-fluid">
    <div class="navbar-header"><a class="navbar-brand" href="select.php">友人の接種記録を確認する</a></div>
    </div>
  </nav>
<!-- Main[End] -->
</body>
</html>