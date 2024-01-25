<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Comics;

class ComicSeeder extends Seeder
{



    public function run(): void
    {
        $array_comic = config("comics");

        foreach ($array_comic as $comics_item) {
            $new_comics = new Comics();
            $new_comics->title = $comics_item["title"];
            $new_comics->description = $comics_item["description"];
            $new_comics->thumb = $comics_item["thumb"];
            $new_comics->price = $comics_item["price"];
            $new_comics->series = $comics_item["series"];
            $new_comics->sale_date = $comics_item["sale_date"];
            $new_comics->type = $comics_item["type"];
            $new_comics->save();
        }
    }
}
