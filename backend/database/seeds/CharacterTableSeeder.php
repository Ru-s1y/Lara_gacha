<?php

use App\Consts\GachaConst;
use App\Models\Character;
use Faker\Generator as Faker;
use Illuminate\Database\Seeder;

class CharacterTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Character::truncate();

        $faker = new Faker();

        for ($grade = 3; $grade <= 5; $grade++) {
            for ($i = 1; $i <= 10; $i++) {

                $belongsNo = mt_rand(0, count(GachaConst::BELONGS) - 1);
                $belongsName = GachaConst::BELONGS[$belongsNo]["name_jp"];

                Character::create([
                    "cid"           => $grade . sprintf('%03d', $i),
                    "name"          => "キャラクター" . $grade . $i,
                    "rarity"        => $grade,
                    "race"          => mt_rand(0, count(GachaConst::RACES) - 1),
                    "gender"        => mt_rand(1, 2),
                    "element"       => mt_rand(0, count(GachaConst::ELEMENTS) - 1),
                    "role"          => mt_rand(0, count(GachaConst::ROLES) - 1),
                    "equip"         => mt_rand(0, count(GachaConst::EQUIP) - 1),
                    "belongs"       => $belongsNo,
                    "position"      => "駆け出し",
                    "description"   => "必死の思いで研鑽を積み重ね、ついに念願の{$belongsName}に所属した。しかし物語はまだ始まったばかりである。冒険の果てにするのは死か、栄光か...。",
                ]);
            }
        }

    }
}
