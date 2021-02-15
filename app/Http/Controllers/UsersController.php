<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UsersController extends Controller
{
    public function show($user_id)
    {
        $user = User::where('id', $user_id)
            ->firstOrFail();

        // テンプレート「mypage/profile.blade.php」を表示。
        return view('mypage/profile', ['user' => $user]);
    }
}
