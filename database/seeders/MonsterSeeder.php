<?php

namespace Database\Seeders;

use App\Models\Monster;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class MonsterSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $monsters = [

    [
         'name' => 'Lupo delle Braci',
         'description' => 'Predatore vulcanico dal pelo ardente e dagli occhi incandescenti. Vive in branchi territoriali e utilizza tattiche di accerchiamento aggressive.',
         'image' => 'monsters/lupo_delle_braci.jpg',
         'size_id' => 2,
         'types' => [2, 8]
    ],

    [
         'name' => 'Cavaliere Caduto',
         'description' => 'Antico guerriero riportato in vita tramite necromanzia proibita. Conserva frammenti della propria disciplina militare.',
         'image' => 'monsters/cavaliere_caduto.jpg',
         'size_id' => 3,
         'types' => [16, 19]
    ],

    [
         'name' => 'Drago della Piaga',
         'description' => 'Drago corrotto da energie infernali e pestilenziali. Il suo respiro diffonde malattie e decomposizione.',
         'image' => 'monsters/drago_della_piaga.jpg',
         'size_id' => 5,
         'types' => [7, 5]
    ],

    [
         'name' => 'Custode Runico',
         'description' => 'Costrutto antico animato da rune eterne e spiriti imprigionati.',
         'image' => 'monsters/custode_runico.jpg',
         'size_id' => 4,
         'types' => [4, 18]
    ],

    [
         'name' => 'Aberrazione Astrale',
         'description' => 'Entità proveniente dal vuoto cosmico, dotata di anatomia impossibile e mente aliena.',
         'image' => 'monsters/aberrazione_astrale.jpg',
         'size_id' => 4,
         'types' => [1, 18]
    ],

    [
         'name' => 'Chimera Selvaggia',
         'description' => 'Creatura composta da più specie fuse insieme tramite antica magia proibita.',
         'image' => 'monsters/chimera_selvaggia.jpg',
         'size_id' => 5,
         'types' => [12, 14]
    ],

    [
         'name' => 'Spettro del Monastero',
         'description' => 'Fantasma inquieto di un antico monaco incapace di trovare pace.',
         'image' => 'monsters/spettro_del_monastero.jpg',
         'size_id' => 2,
         'types' => [16, 18]
    ],

    [
         'name' => 'Troll delle Paludi',
         'description' => 'Gigante brutale dotato di capacità rigenerative eccezionali.',
         'image' => 'monsters/troll_delle_paludi.jpg',
         'size_id' => 4,
         'types' => [11, 14]
    ],

    [
         'name' => 'Arpia Cremisi',
         'description' => 'Predatrice alata che utilizza richiami ipnotici per attirare viaggiatori isolati.',
         'image' => 'monsters/arpia_cremisi.jpg',
         'size_id' => 2,
         'types' => [14, 19]
    ],

    [
         'name' => 'Melma Corrosiva',
         'description' => 'Entità gelatinosa capace di sciogliere armature e carne in pochi secondi.',
         'image' => 'monsters/melma_corrosiva.jpg',
         'size_id' => 3,
         'types' => [13]
    ],

    [
         'name' => 'Ent della Foresta Antica',
         'description' => 'Guardiano vegetale millenario legato a foreste primordiali.',
         'image' => 'monsters/ent_della_foresta.jpg',
         'size_id' => 5,
         'types' => [17, 18]
    ],

    [
         'name' => 'Diavolo Archivista',
         'description' => 'Creatura infernale specializzata nella raccolta di segreti e contratti proibiti.',
         'image' => 'monsters/diavolo_archivista.jpg',
         'size_id' => 2,
         'types' => [6, 19]
    ],

    [
         'name' => 'Demone Famelico',
         'description' => 'Bestia infernale dominata da una fame eterna e incontrollabile.',
         'image' => 'monsters/demone_famelico.jpg',
         'size_id' => 4,
         'types' => [5, 14]
    ],

    [
         'name' => 'Golem di Ossa',
         'description' => 'Costrutto necromantico assemblato con resti di creature gigantesche.',
         'image' => 'monsters/golem_di_ossa.jpg',
         'size_id' => 4,
         'types' => [4, 16]
    ],

    [
         'name' => 'Fata delle Lanterne',
         'description' => 'Piccola creatura del Piano Fatato che vaga nelle foreste notturne.',
         'image' => 'monsters/fata_delle_lanterne.jpg',
         'size_id' => 1,
         'types' => [9]
    ],

    [
         'name' => 'Folletto delle Spine',
         'description' => 'Creatura fatata aggressiva che protegge territori selvaggi con trappole naturali.',
         'image' => 'monsters/folletto_delle_spine.jpg',
         'size_id' => 1,
         'types' => [9, 17]
    ],

    [
         'name' => 'Revenant Silenzioso',
         'description' => 'Non morto guidato esclusivamente dal desiderio di vendetta.',
         'image' => 'monsters/revenant_silensioso.jpg',
         'size_id' => 3,
         'types' => [16, 19]
    ],

    [
         'name' => 'Serpente del Vuoto',
         'description' => 'Creatura aberrante proveniente da dimensioni cosmiche sconosciute.',
         'image' => 'monsters/serpente_del_vuoto.jpg',
         'size_id' => 5,
         'types' => [1, 14]
    ],

    [
         'name' => 'Gigante del Gelo',
         'description' => 'Colosso primordiale adattato ai climi più estremi.',
         'image' => 'monsters/gigante_del_gelo.jpg',
         'size_id' => 5,
         'types' => [11]
    ],

    [
         'name' => 'Mutante della Cripta',
         'description' => 'Creatura deformata da contaminazioni necromantiche.',
         'image' => 'monsters/mutante_della_cripta.jpg',
         'size_id' => 3,
         'types' => [15, 16]
    ],

    [
         'name' => 'Drago Celestiale',
         'description' => 'Creatura draconica legata alle sfere divine e alla magia sacra.',
         'image' => 'monsters/drago_celestiale.jpg',
         'size_id' => 5,
         'types' => [7, 3]
    ],

    [
         'name' => 'Bestia delle Tempeste',
         'description' => 'Predatore elementale generato durante uragani magici.',
         'image' => 'monsters/bestia_delle_tempeste.jpg',
         'size_id' => 4,
         'types' => [2, 8]
    ],

    [
         'name' => 'Lich Imperiale',
         'description' => 'Sovrano immortale che ha sacrificato la propria umanità per il potere assoluto.',
         'image' => 'monsters/lich_imperiale.jpg',
         'size_id' => 3,
         'types' => [16, 19]
    ],

    [
         'name' => 'Basilisco Nero',
         'description' => 'Rettile mostruoso capace di pietrificare le proprie vittime con lo sguardo.',
         'image' => 'monsters/basilisco_nero.jpg',
         'size_id' => 4,
         'types' => [14, 2]
    ],

    [
         'name' => 'Elementale di Cenere',
         'description' => 'Manifestazione instabile di incendi arcani e polvere vulcanica.',
         'image' => 'monsters/elementale_della_cenere.jpg',
         'size_id' => 4,
         'types' => [8]
    ],

    [
         'name' => 'Spirito della Guerra',
         'description' => 'Entità eterea alimentata dalla violenza dei campi di battaglia.',
         'image' => 'monsters/spirito_della_guerra.jpg',
         'size_id' => 3,
         'types' => [18]
    ],

    [
         'name' => 'Ragno Gigante Cremisi',
         'description' => 'Predatore cavernicolo dotato di veleno paralizzante.',
         'image' => 'monsters/ragno_gigante_cremisi.jpg',
         'size_id' => 4,
         'types' => [2]
    ],

    [
         'name' => 'Manticora Oscura',
         'description' => 'Mostruosità volante estremamente territoriale e aggressiva.',
         'image' => 'monsters/manticora_oscura.jpg',
         'size_id' => 4,
         'types' => [14]
    ],


    [
         'name' => 'Cacciatore Infernale',
         'description' => 'Segugio demoniaco addestrato per inseguire anime fuggitive.',
         'image' => 'monsters/cacciatore_infernale.jpg',
         'size_id' => 3,
         'types' => [5, 2]
    ],

    [
         'name' => 'Titanide di Pietra',
         'description' => 'Antica creatura gigante con pelle simile alla roccia.',
         'image' => 'monsters/titanide_di_pietra.jpg',
         'size_id' => 6,
         'types' => [11, 8]
    ],

];

        foreach ($monsters as $monster) {

            $newMonster = new Monster();

            $newMonster->name = $monster['name'];
            $newMonster->description = $monster['description'];
            $newMonster->image = $monster['image'];
            $newMonster->monster_size_id = $monster['size_id'];

            $newMonster->save();

            $newMonster->types()->sync($monster['types']);

        };
    }
}
