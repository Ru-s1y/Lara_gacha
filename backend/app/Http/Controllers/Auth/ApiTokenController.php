<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;

class ApiTokenController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth:api');
    }

    /**
     * 認証済みのユーザーのAPIトークンを更新する
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function update(Request $request)
    {
        $token = Str::random(80);

        $request->user()->forceFill([
            'api_token' => hash('sha256', $token),
        ])->save();

        return ['token' => $token];
    }
}
