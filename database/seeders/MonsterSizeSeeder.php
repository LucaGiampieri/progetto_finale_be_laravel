<?php

namespace Database\Seeders;

use App\Models\MonsterSize;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class MonsterSizeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $sizes = [
            [
                'name' => 'Minuscola',
                'description' => 'Creatura estremamente piccola, spesso delle dimensioni di un insetto o poco più. Facile da ignorare e difficile da colpire.'
            ],
            [
                'name' => 'Piccola',
                'description' => 'Essere di dimensioni ridotte, ma chiaramente visibile. Agile, veloce e capace di muoversi in spazi stretti.'
            ],
            [
                'name' => 'Media',
                'description' => 'Dimensione tipica di un umano o animale comune. Equilibrata in mobilità, presenza e capacità fisiche.'
            ],
            [
                'name' => 'Grande',
                'description' => 'Creatura imponente che occupa uno spazio significativo. La sua massa e altezza la rendono dominante negli scontri.'
            ],
            [
                'name' => 'Mastodontica',
                'description' => 'Essere enorme e pesante, capace di influenzare l’ambiente circostante con la sola presenza. Richiede grande spazio per muoversi.'
            ],
            [
                'name' => 'Colossale',
                'description' => 'Entità di proporzioni straordinarie, raramente incontrata. La sua presenza è paragonabile a una struttura naturale o una piccola costruzione vivente.'
            ],
        ];

        foreach ($sizes as $size) {

            $newSize = new MonsterSize();

            $newSize->name = $size['name'];
            $newSize->description = $size['description'];

            $newSize->save();

        }
    }
}
