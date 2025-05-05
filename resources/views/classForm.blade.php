<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>QRコード生成</title>
    <link rel="stylesheet" href="{{ asset('style.css') }}">
</head>
<body>
    <div class="form-container">
        <h1>授業のQRコードを生成</h1>

        {{-- バリデーションエラー表示 --}}
        @if ($errors->any())
            <div style="color: red; margin-bottom: 10px;">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form action="/generate-qr" method="POST">
            @csrf

            <label for="class_id">授業ID（または授業名）：</label>
            <input type="text" name="class_id" required>

            <button type="submit">QRコード生成</button>
        </form>
    </div>
</body>
</html>
