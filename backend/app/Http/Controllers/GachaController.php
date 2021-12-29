<?php

namespace App\Http\Controllers;

use App\Services\GachaService;
use GachaConst;
use Illuminate\Http\Request;

class GachaController extends Controller
{
    private $service;

    public function __construct()
    {
        $this->service = new GachaService();
    }

    public function detail()
    {
        return $this->service->getGachaInfo();
    }

    public function gacha(Request $request)
    {
        return $this->service->setResults($request);
    }

    public function debug(Request $request)
    {
        return $this->service->setResults($request);
    }
}
