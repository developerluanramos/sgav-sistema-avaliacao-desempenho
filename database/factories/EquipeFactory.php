<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Equipe;

class EquipeFactory extends Factory
{
    protected $model = Equipe::class;

    public function definition()
    {
        $situacaoValue = rand(0, 1) === 1 ? 1 : "0";

        return [
            'uuid' => fake()->uuid(),
            'nome' => fake()->name(),
            'situacao' => $situacaoValue,
        ];
    }
}
