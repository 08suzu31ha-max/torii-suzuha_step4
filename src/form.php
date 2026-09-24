<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>フォーム入力</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

    <h1>フォーム入力</h1>
    <form action="confirm.php" method="POST">
        <label for="username">名前：</label>
        <input type="text" id="username"
        name="username" required> 
    
        <label for="age">年齢：</label>
        <input type="number" id="age" name="age"
        min="0" max="150" required> 

        <label for="phonenumber">電話番号：</label>
        <input type="tel" id="phonenumber" name="phone" required> 

        <label for="email">メールアドレス：</label>
        <input type="email" id="email" name="email" required>

        <label for="address"> 住所：</label>
        <input type="text" id="address" name="address" required>

        <label for="question">質問：</label>
        <input type="text" id="question" name="question" required>

        <label for="gender">性別：</label>
        <select id="gender" name="gender" required>
            <option value="男性">男性</option>
            <option value="女性">女性</option>
        </select>
        


        <button type="submit">送信</button>
    
</form>

</body>
</html>


