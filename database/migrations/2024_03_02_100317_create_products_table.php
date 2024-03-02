<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->string('title')->comment('Название товара');
            $table->text('content')->comment('Описание товара');
            $table->text('material')->comment('Материал товара');
            $table->text('size')->comment('Размеры товара');
            $table->text('timeCreate')->comment('Время создания товара');
            $table->text('image')->comment('Изображение товара');
            $table->string('target')->comment('такгет для js');
            $table->foreignId('patch')->constrained()->cascadeOnDelete();
            $table->boolean('isActive')->default('0')->comment('Статус товара');
            $table->foreignId('category_id')->constrained()->cascadeOnDelete();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('products');
    }
};
