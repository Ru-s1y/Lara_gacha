<?php

namespace App\Services;

use Illuminate\Http\Request;

class GachaService
{
    public $characters;

    public $gradeProbability;

    public function __construct()
    {
        // マスターにおこう
        $this->characters = array(
            "SSR"   => ["5001", "5002", "5003", "5004"],
            "SR"    => ["4001", "4002", "4003", "4004", "4005", "4006"],
            "R"     => ["3001", "3002", "3003", "3004", "3005", "3006", "3007", "3008", "3009", "3010"]
        );
        $this->gradeProbability = array(
            "SSR"   => 300,
            "SR"    => 1200,
            "R"     => 8500,
        );
    }

    public function getGachaInfo() {
        $array = $this->characters;
        array_push($array, $this->gradeProbability);

        return $array;
    }

    /**
     * ガチャ結果生成
     *
     * @param Request $request
     * @return Array $results
     */
    public function setResults($request)
    {
        $rolls = $request->rolls;

        $results = array();
        if (!empty($rolls)) {
            $gradeResult = self::normalRolls($rolls);
            $results = self::pickCharacters($gradeResult);
        }

        return $results;
    }

    /**
     * 10連ガチャ 最低保証
     *
     * @param   String|Int  $rolls
     * @return  Array       $result
     */
    public function normalRolls($rolls) {
        $sr = $this->gradeProbability["SR"];
        $result = array();
        $cnt = 0;
        for ($i = 0; $i < $rolls; $i++) {
            $rand = mt_rand(1, 10000);
            if ($rand > $sr) {
                $cnt++;
            }
            if ($cnt == 10) {
                while($rand > $sr) {
                    $rand = mt_rand(1, 10000);
                }
            }
            array_push($result, $rand);
        }

        return $result;
    }

    /**
     * キャラクター選定
     *
     * @param   Array   $gradeResult
     * @return  Array   $characterResult
     */
    public function pickCharacters($gradeResult) {
        $characterResult = array();;
        foreach ($gradeResult as $result) {
            $character = array();
            $grade;
            if ($result <= $this->gradeProbability["SSR"]) {
                $grade = "SSR";
            } else if ($result <= $this->gradeProbability["SR"]) {
                $grade = "SR";
            } else {
                $grade = "R";
            }
            $key = array_rand($this->characters[$grade]);
            $character = array($grade => $this->characters[$grade][$key]);
            array_push($characterResult, $character);
        }

        return $characterResult;
    }

}