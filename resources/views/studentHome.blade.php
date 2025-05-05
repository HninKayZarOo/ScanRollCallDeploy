<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>学生ページ</title>
    <link rel="stylesheet" href="{{ asset('style.css') }}">
</head>
<body>
    <div class="dashboard-container">
        <h1>{{ Auth::user()->name }} さん、こんにちは！</h1>
        <p>あなたは出席済みです。</p>
        <a href="/" class="logout-btn">ログアウト</a>
    </div>
</body>
</html>
