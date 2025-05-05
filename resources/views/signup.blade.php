<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>新規登録</title>
    <link rel="stylesheet" href="{{ asset('style.css') }}">
</head>
<body>
    <div class="form-container">
        <h1>新規登録</h1>
        <form action="/signup" method="POST">
            @csrf

            @if ($errors->any())
                <div style="color: red; margin-bottom: 20px;">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <label for="name">名前：</label>
            <input type="text" name="name" required>

            <label for="student_number">学生番号：</label>
            <input type="text" name="student_number" required>

            <label for="password">パスワード：</label>
            <input type="password" name="password" required>

            <!-- 役割は「学生」のみ固定 -->
            <input type="hidden" name="role" value="student">

            <button type="submit">登録する</button>
        </form>
    </div>
</body>
</html>
