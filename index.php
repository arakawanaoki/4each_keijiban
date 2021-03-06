<!DOCTYPE html>
<html lang="ja">

<head>
<meta charset="UTF-8">
<title>4eachblog 掲示板</title>
<link rel="stylesheet" type="text/css" href="style.css">
</head>

<body>
  <header>
    <div class="logo">
      <img src="4eachblog_logo.jpg" alt="logo">
    </div>
    <div class="nav">
      <ul>
        <li>トップ</li>
        <li>プロフィール</li>
        <li>4eachについて</li>
        <li>登録フォーム</li>
        <li>問い合わせ</li>
        <li>その他</li>
      </ul>
    </div>
  </header>
 
  <main>
    <div class="main-container">
      <div class="left">
        <h2>プログラミングに役立つ掲示板</h2>
       
        <form method="post" action="insert.php"> 
          <h3>入力フォーム</h3>
          <div>
            <label>ハンドルネーム</label>
            <br>
            <input type="text" class="text" size="35" name="habdlename">
          </div>

          <div>
            <label>タイトル</label>
            <br>
            <input type="text" class="text" size="35" name="title">
          </div>

          <div>
            <label>コメント</label>
            <br>
            <textarea cols="35" rows="7" name="comments"></textarea>
          </div>

          <div>
            <input type="submit" class="submit" value="送信する">
          </div>
        </form>

        <section>
          <h3>タイトル</h3>
          <p>記事の中身、記事の中身、記事の中身、記事の中身、記事の中身、記事の中身、記事の中身、記事の中身、記事の中身、記事の中身、記事の中身、記事の中身、<br>記事の中身、記事の中身、記事の中身、記事の中身、記事の中身、記事の中身、<br>記事の中身、記事の中身、記事の中身、記事の中身、記事の中身、記事の中身、</p>
        </section>

        <section>
          <h3>タイトル</h3>
          <p>記事の中身、記事の中身、記事の中身、記事の中身、記事の中身、記事の中身、記事の中身、記事の中身、記事の中身、記事の中身、記事の中身、記事の中身、<br>記事の中身、記事の中身、記事の中身、記事の中身、記事の中身、記事の中身、<br>記事の中身、記事の中身、記事の中身、記事の中身、記事の中身、記事の中身、</p>
        </section>
      </div>
      <div class="right">
        <h3>人気の記事</h3>
        <ul>
          <li>PHPオススメ本</li>
          <li>PHP MyAdminの使い方</li>
          <li>今人気のエディタ Top5</li>
          <li>HTMLの基礎</li>
        </ul>
        <h3>オススメリンク</h3>
        <ul>
          <li>インターノウス株式会社</li>
          <li>XAMPPのダウンロード</li>
          <li>Eclipseのダウンロード</li>
          <li>Bracketsのダウンロード</li>
        </ul>
        <h3>カテゴリ</h3>
        <ul>
          <li>HTML</li>
          <li>PHP</li>
          <li>MySQL</li>
          <li>JavaScript</li>
        </ul>
      </div>
    </div>
  </main>
 
  <footer>
    copyright internous | 4each blog is the one which provides A to Z  about programming.
  </footer>
</body>