<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redis;

class DebugController extends Controller
{
    public $redis;

    public function __construct()
    {
        $this->redis = Redis::connection();
    }

    public function info()
    {
        return $_ENV;
    }

    public function checkSession(Request $request)
    {
        $string = $request->string;
        $hash = hash('sha256', $string);
        $this->redis->set($string, $hash);

        return $this->redis->get($string);
    }
}
