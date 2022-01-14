<?php

namespace App\Consts;

/**
 * ガチャ・キャラクターに関連するマスター
 */
class GachaConst
{
    /**
     * 確率の分母
     *   100%の100倍
     */
    const PERCENTAGE = 10000;

    /**
     * レアリティごとの確率
     *   百分率の100倍
     */
    const GRADE_PROBABILITY = [
        "SSR"   => 300,
        "SR"    => 1200,
        "R"     => 8500,
    ];

    /**
     * キャラクター識別子
     *   -> DBに移行予定
     */
    const CHARACTERS = [
        "SSR"   => ["5001", "5002", "5003", "5004"],
        "SR"    => ["4001", "4002", "4003", "4004", "4005", "4006"],
        "R"     => ["3001", "3002", "3003", "3004", "3005", "3006", "3007", "3008", "3009", "3010"]
    ];

    // 性別
    const GENDER = [
        [
            "name_en" => "Unknown",
            "name_jp" => "不明"
        ],
        [
            "name_en" => "Male",
            "name_jp" => "男"
        ],
        [
            "name_en" => "Female",
            "name_jp" => "女"
        ],
    ];

    // 属性
    const ELEMENTS = [
        [
            "name_en" => "Fire",
            "name_jp" => "火"
        ],
        [
            "name_en" => "Water",
            "name_jp" => "水"
        ],
        [
            "name_en" => "Wind",
            "name_jp" => "風"
        ],
        [
            "name_en" => "Earth",
            "name_jp" => "土"
        ],
        [
            "name_en" => "Thunder",
            "name_jp" => "雷"
        ],
        [
            "name_en" => "Ice",
            "name_jp" => "氷"
        ]
    ];

    // 種族
    const RACES = [
        [
            "name_en" => "Human",
            "name_jp" => "人族"
        ],
        [
            "name_en" => "Beast",
            "name_jp" => "獣人族"
        ],
        [
            "name_en" => "Fairy",
            "name_jp" => "妖精族"
        ],
        [
            "name_en" => "Dwarf",
            "name_jp" => "鉱人族"
        ],
        [
            "name_en" => "Daemon",
            "name_jp" => "悪魔族"
        ]
    ];

    // 職業・役割
    const ROLES = [
        [
            "name_en" => "Adventurer",
            "name_jp" => "冒険者"
        ],
        [
            "name_en" => "Warrior",
            "name_jp" => "戦士"
        ],
        [
            "name_en" => "Mage",
            "name_jp" => "魔道士"
        ],
        [
            "name_en" => "Cleric",
            "name_jp" => "聖職者"
        ],
        [
            "name_en" => "Hunter",
            "name_jp" => "狩人"
        ],
        [
            "name_en" => "Scout",
            "name_jp" => "斥候"
        ],
        [
            "name_en" => "Knight",
            "name_jp" => "騎士"
        ],
        [
            "name_en" => "Astrologer",
            "name_jp" => "占星術士"
        ],
    ];

    // 装備種
    const EQUIP = [
        [
            "name_en" => "Sword",
            "name_jp" => "片手剣"
        ],
        [
            "name_en" => "Tweihander",
            "name_jp" => "両手剣"
        ],
        [
            "name_en" => "Axe",
            "name_jp" => "戦斧"
        ],
        [
            "name_en" => "Spear",
            "name_jp" => "長槍"
        ],
        [
            "name_en" => "Wand",
            "name_jp" => "魔導杖"
        ],
        [
            "name_en" => "Book",
            "name_jp" => "魔導書"
        ],
        [
            "name_en" => "Bow",
            "name_jp" => "弓"
        ],
    ];

    // 所属
    const BELONGS = [
        [
            "name_en" => "none",
            "name_jp" => "無所属"
        ],
        [
            "name_en" => "Adventures Guild",
            "name_jp" => "冒険者ギルド"
        ],
        [
            "name_en" => "Kingdom Knights",
            "name_jp" => "王国騎士団"
        ],
        [
            "name_en" => "Mercenary Corps",
            "name_jp" => "傭兵団"
        ],
        [
            "name_en" => "Imperial Academy",
            "name_jp" => "帝国魔導院"
        ],
        [
            "name_en" => "Church",
            "name_jp" => "法令院"
        ],
    ];

    const INDEX = [
        "race"      => self::RACES,
        "gender"    => self::GENDER,
        "element"   => self::ELEMENTS,
        "role"      => self::ROLES,
        "equip"     => self::EQUIP,
        "belongs"   => self::BELONGS
    ];
}
