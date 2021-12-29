<?php

namespace App\Consts;

class GachaConst
{
    const PERCENTAGE = 10000;

    const GRADE_PROBABILITY = [
        "SSR"   => 300,
        "SR"    => 1200,
        "R"     => 8500,
    ];

    const CHARACTERS = [
        "SSR"   => ["5001", "5002", "5003", "5004"],
        "SR"    => ["4001", "4002", "4003", "4004", "4005", "4006"],
        "R"     => ["3001", "3002", "3003", "3004", "3005", "3006", "3007", "3008", "3009", "3010"]
    ];

}
