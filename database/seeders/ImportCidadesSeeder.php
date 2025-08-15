<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Cidade;

class ImportCidadesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $path = storage_path('\app/municipios.csv'); // caminho do arquivo
        $file = fopen($path, 'r');

        // Pula o cabeçalho
        fgetcsv($file);

        while (($dados = fgetcsv($file, 0, ',')) !== false) {
            Cidade::updateOrCreate(
                ['id' => $dados[0]], // mantém o mesmo ID do arquivo
                [
                    'codigo_ibge' => $dados[1],
                    'nome_cidades' => $dados[2],
                    'uf_cidade' => $dados[3],
                ]
            );
        }

        fclose($file);
    }
}
