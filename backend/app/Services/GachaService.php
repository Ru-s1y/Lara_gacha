<?php

namespace App\Services;

use GachaConst;
use Illuminate\Http\Request;

class GachaService
{
    public $characters;

    public $gradeProbability;

    public function __construct()
    {
        $this->characters = GachaConst::CHARACTERS;
        $this->gradeProbability = GachaConst::GRADE_PROBABILITY;
    }

    public function getGachaInfo() {
        $infos = array();
        foreach ($this->gradeProbability as $grade => $var) {
            $value = $var / 100;
            $infos["grades"][$grade] = $value;
        }
        $infos["characters"] = $this->characters;

        return $infos;
    }

    /**
     * ガチャ結果生成
     *
     * @param Request $request
     * @return Array $results
     */
    public function setResults($request)
    {
        $rolls = $request["rolls"];

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
            $rand = mt_rand(1, GachaConst::PERCENTAGE);
            if ($rand > $sr) {
                $cnt++;
            }
            if ($cnt == 10) {
                while($rand > $sr) {
                    $rand = mt_rand(1, GachaConst::PERCENTAGE);
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