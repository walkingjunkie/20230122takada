<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>>お問い合わせ</title>
</head>

<body>
  <h1>お問い合わせ</h1>
<form action="" method="post">
  @csrf
  <div class="item">
  <label class="label">お名前</label>
  <input type="text" class="firstname" name="name">
  <input type="text" class="lastname" name="name">
  </div>

  <div class="item">
  <div class="label">性別</div>
  <p class="inputs">
    <input type="radio" id="男" value="男" name=gender checked>男
    <input type="radio" id="女" value="女"name=gender>女
</p>

  <div class="item">
    <label class="label">メールアドレス</label>
    <input type="email" class="email" name="email">
  </div>

  <div class="item">
  <label class="label">郵便番号</label>
  <input type="text" class="postalcode" name="postalcode">
  </div>

    <div class="item">
  <label class="label">住所</label>
  <input type="text" class="adress" name="adress">
  </div>

    <label class="label">建物名</label>
  <input type="text" class="adress2" name="adress2">
  </div>

    <label class="label">ご意見</label>
  <input type="text" class="message" name="message">
  </div>
</form>
</body>

</html>