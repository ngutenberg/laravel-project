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
        if (!Schema::hasTable('currencies')) { // Добавляем условие проверки на существование таблицы
            Schema::create('currencies', function (Blueprint $table) {
                $table->increments('id');
                $table->string('name');
                $table->decimal('rate', 8, 2);
                $table->timestamps();
            });
        }
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void //будет выполнен при откате миграции. Внутри этого метода определяется логика удаления таблицы "currencies" с помощью
    {
        Schema::dropIfExists('currencies');
    }
};
