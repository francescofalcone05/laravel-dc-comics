<?php

namespace Database\Seeders;

use App\Models\Comic;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker;


class ComicsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(Faker $faker): void
    {
        for ($i = 0; $i < 10; $i++) {
            $newComic = new Comic();
            $newComic->title = $faker->words(2, true);
            $newComic->description = $faker->text(300);
            $newComic->thumb = "https://imgs.search.brave.com/aUNyvZBXUulb963JH7KnQm9AMr8bcBoLsiHREOqayIU/rs:fit:612:612:1/g:ce/aHR0cHM6Ly9pNS53/YWxtYXJ0aW1hZ2Vz/LmNvbS9hc3IvOWZm/ZWYzMDMtMGZhYy00/OGRkLTg3ODctYzUy/NTk0MDk2ODAwXzEu/MTc1ZDk1Mjg2NzY0/OGEwOTczMTY2NGMy/MTE1NjNlYWIuanBl/Zz9vZG5XaWR0aD02/MTImb2RuSGVpZ2h0/PTYxMiZvZG5CZz1m/ZmZmZmY";
            $newComic->price = $faker->numberBetween(0, 50) . '.' . 99;
            $newComic->series = $faker->words(3, true);
            $newComic->sale_date = $faker->dateTimeBetween();
            $newComic->type = $faker->words(3, true);
            $newComic->artists = $faker->name();
            $newComic->writers = $faker->name();
            $newComic->save();
        }
    }
}
