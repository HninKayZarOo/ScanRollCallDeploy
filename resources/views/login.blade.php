<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>ログイン</title>
    <link rel="stylesheet" href="{{ asset('style.css') }}">
</head>
<body>
    <div class="form-container">
        <h1>ログイン</h1>
        <form action="/login" method="POST">
            @csrf
            <label for="student_number">学生番号：</label>
            <input type="text" name="student_number" required>

            <label for="password">パスワード：</label>
            <input type="password" name="password" required>

            <button type="submit">ログイン</button>
        </form>
    </div>
</body>
</html>
