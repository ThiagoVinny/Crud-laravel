<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    public $table = 'categories';

    public $fillable = [
        'nome',
        'descricao'
    ];

    protected $casts = [
        'nome' => 'string',
        'descricao' => 'string'
    ];

    public static array $rules = [
        'nome' => 'required|string|max:255',
        'descricao' => 'nullable|string',
        'created_at' => 'nullable',
        'updated_at' => 'nullable'
    ];

    
}
