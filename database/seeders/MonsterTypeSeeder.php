<?php

namespace Database\Seeders;

use App\Models\MonsterType;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class MonsterTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        $types = [

          [
              'name' => 'Aberrazione',
              'description' => 'Creature non naturali provenienti da realtà aliene o dimensioni inconcepibili, spesso con anatomie e percezioni distorte rispetto alla vita materiale.'
          ],
          [
              'name' => 'Bestia',
              'description' => 'Animali selvatici non senzienti o dotati di intelligenza minima, parte della fauna naturale dei mondi materiali.'
          ],
          [
              'name' => 'Celestiale',
              'description' => 'Entità provenienti dai piani superiori, incarnazioni di forze divine legate a giustizia, ordine o bene cosmico.'
          ],
          [
              'name' => 'Costrutto',
              'description' => 'Essere artificiale animato da magia, ingegneria o forza arcana, privo di biologia naturale.'
          ],
          [
              'name' => 'Demone',
              'description' => 'Entità caotiche provenienti dai piani inferiori, guidate da distruzione e istinto primordiale.'
          ],
          [
              'name' => 'Diavolo',
              'description' => 'Creature ordinate ma malvagie dei Nove Inferi, basate su gerarchia, inganno e corruzione.'
          ],
          [
              'name' => 'Drago',
              'description' => 'Creature antiche, intelligenti e estremamente potenti, dotate di magia innata e lunga vita.'
          ],
          [
              'name' => 'Elementale',
              'description' => 'Entità composte interamente da uno degli elementi primari: fuoco, acqua, aria o terra.'
          ],
          [
              'name' => 'Folletto',
              'description' => 'Creature magiche legate al Piano Fatato, spesso caotiche, elusive e profondamente connesse alla natura.'
          ],
          [
              'name' => 'Folletto oscuro',
              'description' => 'Creature del Piano Fatato corrotto, legate a emozioni negative, illusioni e natura distorta.'
          ],
          [
              'name' => 'Gigante',
              'description' => 'Umanoidi di dimensioni enormi organizzati in culture primitive o tribali.'
          ],
          [
              'name' => 'Ibrido',
              'description' => 'Creature nate dalla fusione stabile di due o più specie o nature biologiche o magiche.'
          ],
          [
              'name' => 'Melma',
              'description' => 'Entità amorfe prive di struttura stabile, spesso gelatinose o viscide.'
          ],
          [
              'name' => 'Mostruosità',
              'description' => 'Creature biologicamente anomale che non rientrano in alcuna classificazione naturale o magica coerente.'
          ],
          [
              'name' => 'Mutante',
              'description' => 'Essere alterato da magia instabile, esperimenti o contaminazioni che ne modificano la forma originale.'
          ],
          [
              'name' => 'Non morto',
              'description' => 'Creature riportate alla non-vita tramite necromanzia, maledizioni o energie oscure.'
          ],
          [
              'name' => 'Pianta',
              'description' => 'Organismi vegetali animati o senzienti, spesso legati a magia naturale o ambienti primordiali.'
          ],
          [
              'name' => 'Spirito',
              'description' => 'Entità incorporee legate al mondo spirituale, spesso residui dell’anima o energie eteree.'
          ],
          [
              'name' => 'Umanoide',
              'description' => 'Creature bipedi intelligenti dotate di linguaggio, cultura e società organizzata.'
          ],

        ];


        foreach ($types as $type) {

            $newType = new MonsterType();

            $newType->name = $type['name'];
            $newType->description = $type['description'];

            $newType->save();

        };

    }
}
