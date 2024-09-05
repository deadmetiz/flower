<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Query\Expression;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {

        Schema::create('Ассортимент', function (Blueprint $table) {
            $table->id('id_товара');
            $table->integer('id_категории')->nullable();
            $table->string('Название')->nullable();
            $table->bigInteger('Цена')->nullable();
            $table->bigInteger('Старая_цена')->nullable();
        });

        Schema::create('Заказы', function (Blueprint $table) {
            $table->id('id_заказа');
            $table->bigInteger('id_пользователя')->nullable();
            $table->text('Адрес')->nullable();
            $table->timestamp('Дата_заказа')->default(New Expression('NOW()'));
        });

        Schema::create('Эл_заказы', function (Blueprint $table) {
            $table->id('id_эл');
            $table->bigInteger('id_заказа');
            $table->bigInteger('id_товара')->nullable();
            $table->bigInteger('Цена')->nullable();
            $table->bigInteger('Количество');
        });

        Schema::create('Категории', function (Blueprint $table) {
            $table->id('id_категории');
            $table->string('Название', 30)->nullable();
        });

        Schema::create('Пользователи', function (Blueprint $table){
            $table->id();
            $table->bigInteger('id_пользователя')->nullable();
            $table->string('Почта', 30);
            $table->string('password', 6);
            $table->string('Роль', 15)->nullable();
            $table->rememberToken();
        });

        Schema::create('Корзина', function (Blueprint $table){
            $table->bigInteger('id_пользователя');
            $table->bigInteger('id_товара')->nullable();
            $table->bigInteger('Количество');
        });

        Schema::create('Избранное', function (Blueprint $table){
            $table->bigInteger('id_пользователя');
            $table->bigInteger('id_товара')->nullable();
        });


        Schema::create('Поставки', function (Blueprint $table) {
            $table->id('id_поставки');
            $table->string('id_поставщика', 30)->nullable();
            $table->bigInteger('id_товара')->nullable();
            $table->timestamp('Дата')->nullable();
        });

        Schema::create('Поставщик', function (Blueprint $table) {
            $table->id('id_поставщика');
            $table->string('Название', 30)->nullable();
            $table->string('Телефон', 15)->nullable();
            $table->string('Адрес', 30)->nullable();
        });

        Schema::create('Статистика', function (Blueprint $table) {
            $table->bigInteger('id_товара');
            $table->bigInteger('Количество_покупок')->nullable();
            $table->bigInteger('Частота_заказов')->nullable();
        });

        Schema::create('Посты', function (Blueprint $table) {
            $table->id('id_поста');
            $table->text('Заголовок')->nullable();
            $table->text('Содержание')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
    }
};
