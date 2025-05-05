<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class LoginController extends Controller
{
    public function login(Request $request)
    {
        $credentials = $request->validate([
            'student_number' => ['required'],
            'password' => ['required'],
        ]);

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();

            // ロールによって分岐
            $user = Auth::user();

            if ($user->role === 'teacher') {
                return redirect()->intended('dashboard');
            } else {
                return redirect()->intended('student-home');
            }
        }

        return back()->with('error', 'ログイン失敗しました。');
    }
}
