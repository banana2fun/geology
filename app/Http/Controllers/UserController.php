<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function index()
    {
        /** @var User $user */
        $user = Auth::user();
        $avatarUrl = $user->getAvatarUrl();
        return view('user.profile', compact('avatarUrl'));
    }

    public function update(Request $request)
    {
        $data = $request->toArray();
        $result = false;
        if (Hash::check($data['old_password'], Auth::user()['password'])) {
            $request->user()->fill([
                'password' => Hash::make($data['new_password']),
            ])->saveOrfail();
            $result = true;
        }
        return view('user.result', compact('result'));
    }
}
