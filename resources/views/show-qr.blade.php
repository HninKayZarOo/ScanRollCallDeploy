<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>QRコード表示</title>
    <link rel="stylesheet" href="{{ asset('style.css') }}">
</head>
<body>
    <div class="form-container">
        <h2>出席QRコード（{{ $classId }}）</h2>

        <img src="{{ $qrUrl }}" alt="QRコード">

        <br><br>
        <a href="/dashboard-teacher">ダッシュボードに戻る</a>
    </div>
</body>
</html>
