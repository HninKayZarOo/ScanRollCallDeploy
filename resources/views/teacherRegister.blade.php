<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>先生登録</title>
    <link rel="stylesheet" href="{{ asset('style.css') }}">
</head>
<body>
    <div class="form-container">
        <h1>先生専用登録フォーム</h1>
        <form action="/register-teacher" method="POST">
            @csrf

            <label for="name">名前：</label>
            <input type="text" name="name" required>

            <label for="password">パスワード：</label>
            <input type="password" name="password" required>

            <button type="submit">先生アカウントを登録</button>
        </form>
    </div>
</body>
</html>
