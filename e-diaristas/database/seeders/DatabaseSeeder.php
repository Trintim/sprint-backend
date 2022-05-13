<?php

namespace Database\Seeders;

use App\Models\Diarista;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        Diarista::create([
            'nome_completo' => 'Victor Trintim',
            'cpf' => '14961491730',
            'email' => 'victortrintim@gmail.com',
            'telefone' => 27999190576,
            'logradouro' => 'Rua Jose Bino SantAnna',
            'numero' => 243,
            'bairro' => 'Universitario',
            'complemento' => null,
            'cidade' => 'São Mateus',
            'cep' => 29933450,
            'estado' => 'ES',
            'codigo_ibge' => 335487,
            'foto_usuario' => 'null',
        ]);
    }
}
