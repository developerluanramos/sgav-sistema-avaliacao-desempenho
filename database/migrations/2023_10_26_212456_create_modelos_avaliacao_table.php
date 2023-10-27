<?php

use App\Enums\FinalidadeModeloEnum;
use App\Enums\SituacaoModeloEnum;
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
        Schema::create('modelos_avaliacao', function (Blueprint $table) {
            $table->id();
            $table->uuid('uuid')->unique();
            $table->string('nome');
            $table->enum('situacao', SituacaoModeloEnum::getValues())
                ->default(SituacaoModeloEnum::ATIVO());
            $table->enum('finalidade', FinalidadeModeloEnum::getValues())
                ->default(FinalidadeModeloEnum::EVOLUCAO_FUNCIONAL());;
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('modelos_avaliacao');
    }
};
