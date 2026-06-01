<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>入力内容確認</title>
</head>
<body>

<h1>入力内容確認</h1>

<p>名前: <?php echo htmlspecialchars($_POST['name'], ENT_QUOTES, 'UTF-8'); ?></p>
<p>年齢: <?php echo htmlspecialchars($_POST['age'], ENT_QUOTES, 'UTF-8'); ?></p>
<p>電話番号: <?php echo htmlspecialchars($_POST['phone'], ENT_QUOTES, 'UTF-8'); ?></p>
<p>メールアドレス: <?php echo htmlspecialchars($_POST['email'], ENT_QUOTES, 'UTF-8'); ?></p>
<p>住所: <?php echo htmlspecialchars($_POST['address'], ENT_QUOTES, 'UTF-8'); ?></p>
<p>質問: <?php echo htmlspecialchars($_POST['question'], ENT_QUOTES, 'UTF-8'); ?></p>
<p>性別: <?php echo htmlspecialchars($_POST['gender'], ENT_QUOTES, 'UTF-8'); ?></p>

</body>
</html>