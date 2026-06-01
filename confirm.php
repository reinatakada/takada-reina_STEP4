<?php
$name = $_POST['name'] ?? '';
$age = $_POST['age'] ?? '';
$phone = $_POST['phone'] ?? '';
$email = $_POST['email'] ?? '';
$address = $_POST['address'] ?? '';
$question = $_POST['question'] ?? '';
$gender = $_POST['gender'] ?? '';

$errors = [];

if ($name === '' || !preg_match('/^[ぁ-んァ-ヶ一-龠a-zA-Z]+$/u', $name)) {
    $errors[] = '名前はひらがな、カタカナ、漢字、英字のみ使用できます。';
}

if ($age === '' || !preg_match('/^\d+$/', $age) || $age < 0 || $age > 150) {
    $errors[] = '年齢は0から150の間で入力してください。';
}

if ($phone === '' || !preg_match('/^[0-9-]+$/', $phone)) {
    $errors[] = '電話番号は半角数字とハイフンのみ使用できます。';
}

if ($email === '' || !filter_var($email, FILTER_VALIDATE_EMAIL)) {
    $errors[] = 'メールアドレスの形式が正しくありません。';
}

if ($address === '' || !preg_match('/^[ぁ-んァ-ヶ一-龠a-zA-Z0-9-]+$/u', $address)) {
    $errors[] = '住所はひらがな、カタカナ、漢字、英字、半角数字、ハイフンのみ使用できます。';
}
?>
<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>入力内容確認</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<h1>入力内容確認</h1>

<?php if (!empty($errors)): ?>
    <?php foreach ($errors as $error): ?>
        <p><?php echo htmlspecialchars($error, ENT_QUOTES, 'UTF-8'); ?></p>
    <?php endforeach; ?>
<?php else: ?>
    <p>名前: <?php echo htmlspecialchars($name, ENT_QUOTES, 'UTF-8'); ?></p>
    <p>年齢: <?php echo htmlspecialchars($age, ENT_QUOTES, 'UTF-8'); ?></p>
    <p>電話番号: <?php echo htmlspecialchars($phone, ENT_QUOTES, 'UTF-8'); ?></p>
    <p>メールアドレス: <?php echo htmlspecialchars($email, ENT_QUOTES, 'UTF-8'); ?></p>
    <p>住所: <?php echo htmlspecialchars($address, ENT_QUOTES, 'UTF-8'); ?></p>
    <p>質問: <?php echo htmlspecialchars($question, ENT_QUOTES, 'UTF-8'); ?></p>
    <p>性別: <?php echo htmlspecialchars($gender, ENT_QUOTES, 'UTF-8'); ?></p>
<?php endif; ?>

</body>
</html>