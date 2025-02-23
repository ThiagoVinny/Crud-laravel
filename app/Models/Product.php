<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    public $table = 'products';

    public $fillable = [
        'nome',
        'descricao',
        'preco',
        'quantidade',
        'category_id'
    ];

    protected $casts = [
        'nome' => 'string',
        'descricao' => 'string',
        'preco' => 'decimal:2'
    ];

    public static array $rules = [
        'nome' => 'required|string|max:255',
        'descricao' => 'nullable|string',
        'preco' => 'required|numeric',
        'quantidade' => 'required',
        'category_id' => 'required',
        'created_at' => 'nullable',
        'updated_at' => 'nullable'
    ];

    public function category(): \Illuminate\Database\Eloquent\Relations\BelongsTo
    {
        return $this->belongsTo(\App\Models\Category::class, 'category_id');
    }
}
