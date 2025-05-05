<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AttendanceController extends Controller
{
    public function store(Request $request)
    {
        $classId = $request->input('class_id');
        $studentId = $request->input('student_id');

        // 出席情報を保存
        DB::table('attendances')->insert([
            'class_id' => $classId,
            'student_id' => $studentId,
            'attended_at' => now(),
        ]);

        return '出席を記録しました！';
    }
    public function index()
    {
        $attendances = \DB::table('attendances')
            ->join('users', 'attendances.student_id', '=', 'users.student_number')
            ->select(
                'attendances.class_id',
                'attendances.student_id',
                'users.name',
                'attendances.attended_at',
                'attendances.status'
            )
            ->orderBy('attended_at', 'desc')
            ->get();

        return view('dashboard', ['attendances' => $attendances]);
    }
}
