<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->id(); // Auto-incremento
            $table->string('nome'); // Nome do produto, obrigatório
            $table->text('descricao')->nullable(); // Descrição opcional
            $table->decimal('preco', 8, 2); // Preço do produto, obrigatório
            $table->integer('quantidade'); // Quantidade, obrigatória
            $table->unsignedBigInteger('category_id'); // Chave estrangeira para a tabela categories
            $table->timestamps(); // created_at e updated_at

            // Definir a chave estrangeira
            $table->foreign('category_id')->references('id')->on('categories')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('products');
    }
};
