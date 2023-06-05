<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Currency extends Model
{
     /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['name', 'rate']; // можем передать массив значений этих атрибутов в метод create() модели для создания новой записи в базе данных.
    use HasFactory; // предоставляет фабричные методы, которые облегчают создание тестовых данных и заполнение моделей фиктивными данными.
}
