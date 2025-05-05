<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class TeacherLoginController extends Controller
{
    public function showLoginForm()
    {
        return view('loginTeacher'); // このファイルを後で作る
    }

    public function login(Request $request)
    {
        $credentials = $request->validate([
            'name' => ['required'],
            'password' => ['required'],
        ]);

        if (Auth::attempt(['name' => $credentials['name'], 'password' => $credentials['password'], 'role' => 'teacher'])) {
            $request->session()->regenerate();
            return redirect()->intended('/dashboard'); // ダッシュボードへ
        }

        return back()->withErrors([
            'login_error' => 'ログイン情報が間違っています。',
        ]);
    }
}
