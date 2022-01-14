<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
use GachaConst;

class Character extends Model
{
    public function getAll() {
        return $this->all();
    }

    public function getCharacter($cid) {
        return $this->find('cid', $id);
    }

    public function getCharactersInfo($resultSet)
    {
        $result = array();
        foreach ($resultSet as $grade => $charactersCid) {
            $characters = DB::table('characters')
                            ->select('cid', 'rarity', 'name', 'race', 'gender', 'element', 'role', 'equip', 'belongs', 'position', 'description')
                            ->whereIn('cid', $charactersCid)
                            ->orderBy('rarity', 'desc')
                            ->orderBy('cid', 'asc')
                            ->get();
            foreach ($characters as $character) {
                $array = json_decode(json_encode($character), true);
                $result[] = $this->convertInt2Name($array);
            }
        }
        return $result;
    }

    public function convertInt2Name($character)
    {
        $stash = $character;
        $index = GachaConst::INDEX;
        foreach ($index as $key => $value) {
            $character[$key] = $value[$stash[$key]]["name_jp"];
        }

        return $character;
    }
}
