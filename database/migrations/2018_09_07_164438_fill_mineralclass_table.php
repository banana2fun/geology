<?php

use Illuminate\Database\Migrations\Migration;
use  App\MineralClass;

class FillMineralclassTable extends Migration
{
    private const NAMES = [
        'Самородные элементы',
        'Сульфиды',
        'Галоидные соединения',
        'Оксиды',
        'Гидроксиды',
        'Карбонаты',
        'Сульфаты',
        'Фосфаты',
        'Вольфраматы',
        'Силикаты',
    ];

    public function up()
    {
        DB::transaction(function () {
            collect(self::NAMES)->each(function ($name) {
                MineralClass::create(['name' => $name]);
            });
        });
    }

    public function down()
    {
        MineralClass::query()->whereIn('name', self::NAMES)->delete();
    }
}
