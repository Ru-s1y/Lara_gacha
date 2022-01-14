<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCharacterTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('characters', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('cid', 4)->unique()->comment("キャラクター識別ID");
            $table->string('name')->unique()->comment("名前");
            $table->string('rarity', 1)->comment("レアリティ");
            $table->integer('race')->unsigned()->comment("種族");
            $table->integer('gender')->unsigned()->comment("性別");
            $table->integer('element')->unsigned()->comment("元素属性");
            $table->integer('role')->unsigned()->comment("職業");
            $table->integer('equip')->unsigned()->comment("装備");
            $table->integer('belongs')->unsigned()->comment("所属");
            $table->string('position')->nullable()->comment("肩書き、二つ名");
            $table->text('description')->nullable()->comment("説明書き");
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('characters');
    }
}
