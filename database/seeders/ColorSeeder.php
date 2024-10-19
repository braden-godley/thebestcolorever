<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Color;

class ColorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $fh = fopen(__DIR__ . "/../../colors-list.txt", "r");

        $colors = [];

        while (!feof($fh)) {
            $line = fgets($fh);
            $line = trim($line);
            if ($line) {
                $colors[] = $line;
            }
        }

        foreach ($colors as $colorname) {
            $color = new Color();
            $color->color = $colorname;
            $color->save();
        }
    }
}
