<?php

use Illuminate\Database\Migrations\Migration; //предоставляет базовую функциональность для создания и изменения схемы базы данных с помощью миграций.
use Illuminate\Database\Schema\Blueprint; //предоставляет средства для определения структуры таблицы базы данных.
use Illuminate\Support\Facades\Schema; // предоставляет фасад для работы с схемой базы данных.

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('currencies', function (Blueprint $table) { /**создает таблицу в базе данных.Метод create принимает название таблицы, в котором определяется структура таблицы с помощью объекта Blueprint. */
            $table->increments('id');
        $table->string('name');
        $table->decimal('rate', 8, 2);
        $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void //будет выполнен при откате миграции. Внутри этого метода определяется логика удаления таблицы "currencies" с помощью
    {
        Schema::dropIfExists('currencies');
    }
};
