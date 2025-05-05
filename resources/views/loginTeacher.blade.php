<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>先生ログイン</title>
    <link rel="stylesheet" href="{{ asset('style.css') }}">
</head>
<body>
    <div class="form-container">
        <h1>先生ログイン</h1>

        @if ($errors->any())
            <div style="color: red;">
                {{ $errors->first('login_error') }}
            </div>
        @endif

        <form action="/login-teacher" method="POST">
            @csrf
            <label for="name">名前：</label>
            <input type="text" name="name" required>

            <label for="password">パスワード：</label>
            <input type="password" name="password" required>

            <button type="submit">ログイン</button>
        </form>
    </div>
</body>
</html>
