<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

return new class extends Migration
{
    static $regions = [
        ['name' => 'Республика Адыгея'],
        ['name' => 'Республика Алтай'],
        ['name' => 'Республика Башкортостан'],
        ['name' => 'Республика Бурятия'],
        ['name' => 'Республика Дагестан'],
        ['name' => 'Республика Ингушетия'],
        ['name' => 'Кабардино-Балкарская Республика'],
        ['name' => 'Республика Калмыкия'],
        ['name' => 'Карачаево-Черкесская Республика'],
        ['name' => 'Республика Карелия'],
        ['name' => 'Республика Коми'],
        ['name' => 'Республика Крым'],
        ['name' => 'Республика Марий Эл'],
        ['name' => 'Республика Мордовия'],
        ['name' => 'Республика Саха (Якутия)'],
        ['name' => 'Республика Северная Осетия — Алания'],
        ['name' => 'Республика Татарстан'],
        ['name' => 'Республика Тыва'],
        ['name' => 'Удмуртская Республика'],
        ['name' => 'Республика Хакасия'],
        ['name' => 'Чеченская Республика'],
        ['name' => 'Чувашская Республика'],
        ['name' => 'Алтайский край'],
        ['name' => 'Забайкальский край'],
        ['name' => 'Камчатский край'],
        ['name' => 'Краснодарский край'],
        ['name' => 'Красноярский край'],
        ['name' => 'Пермский край'],
        ['name' => 'Приморский край'],
        ['name' => 'Ставропольский край'],
        ['name' => 'Хабаровский край'],
        ['name' => 'Амурская область'],
        ['name' => 'Архангельская область'],
        ['name' => 'Астраханская область'],
        ['name' => 'Белгородская область'],
        ['name' => 'Брянская область'],
        ['name' => 'Владимирская область'],
        ['name' => 'Волгоградская область'],
        ['name' => 'Вологодская область'],
        ['name' => 'Воронежская область'],
        ['name' => 'Ивановская область'],
        ['name' => 'Иркутская область'],
        ['name' => 'Калининградская область'],
        ['name' => 'Калужская область'],
        ['name' => 'Кемеровская область'],
        ['name' => 'Кировская область'],
        ['name' => 'Костромская область'],
        ['name' => 'Курганская область'],
        ['name' => 'Курская область'],
        ['name' => 'Ленинградская область'],
        ['name' => 'Липецкая область'],
        ['name' => 'Магаданская область'],
        ['name' => 'Московская область'],
        ['name' => 'Мурманская область'],
        ['name' => 'Нижегородская область'],
        ['name' => 'Новгородская область'],
        ['name' => 'Новосибирская область'],
        ['name' => 'Омская область'],
        ['name' => 'Оренбургская область'],
        ['name' => 'Орловская область'],
        ['name' => 'Пензенская область'],
        ['name' => 'Псковская область'],
        ['name' => 'Ростовская область'],
        ['name' => 'Рязанская область'],
        ['name' => 'Самарская область'],
        ['name' => 'Саратовская область'],
        ['name' => 'Сахалинская область'],
        ['name' => 'Свердловская область'],
        ['name' => 'Смоленская область'],
        ['name' => 'Тамбовская область'],
        ['name' => 'Тверская область'],
        ['name' => 'Томская область'],
        ['name' => 'Тульская область'],
        ['name' => 'Тюменская область'],
        ['name' => 'Ульяновская область'],
        ['name' => 'Челябинская область'],
        ['name' => 'Ярославская область'],
        ['name' => 'Москва'],
        ['name' => 'Санкт-Петербург'],
        ['name' => 'Севастополь'],
        ['name' => 'Еврейская автономная область'],
        ['name' => 'Ненецкий автономный округ'],
        ['name' => 'Донецкая Народная Республика'],
        ['name' => 'Луганская Народная Республика'],
        ['name' => 'Херсонская область'],
        ['name' => 'Запорожская область'],
        ['name' => 'Ханты-Мансийский автономный округ — Югра'],
        ['name' => 'Чукотский автономный округ'],
        ['name' => 'Ямало-Ненецкий автономный округ'],
        ['name' => 'Территории, находящиеся за пределами РФ и обслуживаемые Управлением режимных объектов МВД России, Байконур'],
    ];

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('regions', function (Blueprint $table) {
            $table->id()->unique();
            $table->string('name', 255);
        });
        
        foreach(self::$regions as $region){
            DB::table('regions')->insert($region);
        }
        
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('regions');
    }
};
