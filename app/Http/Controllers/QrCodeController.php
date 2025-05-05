<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class QrCodeController extends Controller
{
    // フォームを表示（GET）
    public function showForm()
    {
        return view('classForm');
    }

    // QRコードを生成（POST）
    public function generate(Request $request)
    {
        $classId = $request->input('class_id');
        $attendUrl = url('/attend') . '?class_id=' . $classId;

        $qrUrl = 'https://api.qrserver.com/v1/create-qr-code/?data=' . urlencode($attendUrl) . '&size=200x200';

        return view('show-qr', ['qrUrl' => $qrUrl, 'classId' => $classId]);
    }
}


