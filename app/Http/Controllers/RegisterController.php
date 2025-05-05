<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class RegisterController extends Controller
{
    public function store(Request $request)
{
    $request->validate([
        'name' => 'required',
        'student_number' => 'required|unique:users',
        //'email' => 'required|email|unique:users',
        'password' => 'required|min:6',
       // 'role' => 'required|in:student,teacher',
    ]);

    User::create([
        'name' => $request->name,
        'student_number' => $request->student_number,
      //  'email' => $request->email,
        'password' => Hash::make($request->password),
        'role' => 'student',
    ]);

    return redirect('/login')->with('success', '登録が完了しました！');
}

}

