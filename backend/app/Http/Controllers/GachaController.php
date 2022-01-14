<?php

namespace App\Http\Controllers;

use App\Models\Character;
use App\Services\GachaService;
use App\Http\Requests\GachaRequest;
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

    public function debug(GachaRequest $request)
    {
        return $this->service->setResults($request->validated());
    }

    public function charactersInfo(Request $request)
    {
        $character = new Character();

        $results = $this->service->getGachaInfo();
        $charactersInfo = $character->getCharactersInfo($results["characters"]);
        $results["characters"] = $charactersInfo;

        return $results;
    }
}
