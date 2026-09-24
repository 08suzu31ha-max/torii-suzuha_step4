<!DOCTYPE html>
<html lang="ja">
    <head>
        <meta charset="UTF-8">
        <title>入力内容確認</title>
</head>
<body>

<h1>入力内容確認</h1>
<?php
 if($_SERVER["REQUEST_METHOD"]==="POST"){
    $username=$_POST["username"];
    $age=$_POST["age"];
    $phonenumber=$_POST["phone"];
    $email=$_POST["email"];
    $address=$_POST["address"];
    $question=$_POST["question"];
    $gender=$_POST["gender"];

if (!preg_match("/^[ぁ-んァ-ヶ一-龯a-zA-Z]+$/u", $username)) {
    echo "名前はひらがな、カタカナ、漢字、英字のみ使用できます。<br>";
    echo '<a href="form.php">フォームに戻る</a>';
    exit;
}
if ($age < 0 || $age > 150) {
    echo "年齢は0〜150の間で入力してください。<br>";
    echo '<a href="form.php">フォームに戻る</a>';
    exit;
}
if(!preg_match("/^[0-9-]+$/",$phonenumber)){
    echo "電話番号は半角数字とハイフンのみ使用できます<br>。";
    echo '<a href="form.php">フォームに戻る</a>';
    exit;
}
if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
    echo"メールアドレスの形式が正しくありません。<br>";
    echo '<a href="form.php">フォームに戻る</a>';
    exit;
 }
if(!preg_match("/^[ぁ-んァ-ヶーー-龯a-zA-Z0-9-]+$/u" , $address)){
    echo"住所はひらがな、カタカナ、漢字、英字、半角数字、ハイフンのみ使用できます。<br>";
    echo '<a href="form.php">フォームに戻る</a>';
    exit;
}

else{
    echo"名前：" . $username . "<br>";
    echo"年齢：" . $age . "<br>";
    echo"電話番号：" . $phonenumber . "<br>";
    echo"メールアドレス：" . $email . "<br>";
    echo"住所：" . $address . "<br>";
    echo"質問：" . $question . "<br>";
    echo"性別：" . $gender . "<br>";
}
 }