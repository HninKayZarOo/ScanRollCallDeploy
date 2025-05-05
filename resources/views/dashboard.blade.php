<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>ダッシュボード</title>
    <link rel="stylesheet" href="{{ asset('style.css') }}">
</head>
<body>
    <div class="dashboard-container">
        {{-- <h1>{{ Auth::user()->name }} さん、ようこそ！</h1> ← これを削除 --}}

        <p>Scan Rollcall へようこそ。</p>
        <a href="/" class="logout-btn">ログアウト</a>

        <hr>

        <h2>出席一覧</h2>
        <table border="1" cellpadding="10">
            <thead>
                <tr>
                    <th>学生ID</th>
                    <th>名前</th>
                    <th>授業名</th>
                    <th>出席日時</th>
                    <th>ステータス</th>
                </tr>
            </thead>
            <tbody>
                @foreach($attendances as $a)
                <tr>
                    <td>{{ $a->student_id }}</td>
                    <td>{{ $a->name }}</td>
                    <td>{{ $a->class_id }}</td>
                    <td>{{ $a->attended_at }}</td>
                    <td>{{ $a->status }}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</body>
</html>
