<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class TeacherRegisterController extends Controller
{
    // GET: 登録フォームを表示
    public function showForm()
    {
        // ここに認証チェックなどつけてもOK
        return view('teacherRegister');
    }

    // POST: データ保存
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'password' => 'required|min:6',
        ]);

        User::create([
            'name' => $request->name,
            'student_number' => null, // 先生は不要
            'password' => Hash::make($request->password),
            'role' => 'teacher', // 先生固定！
        ]);

        return redirect('/login')->with('success', '先生アカウントを作成しました！');
    }
}
