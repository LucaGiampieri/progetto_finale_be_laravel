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

        $json = file_get_contents(database_path('data/monsters.json'));

        $data = json_decode($json, true);

        foreach ($data['monsters'] as $monster) {

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
