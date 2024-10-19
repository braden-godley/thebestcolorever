<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Color extends Model
{
    public $timestamps = false;

    public static function randomPick(int $count = 2)
    {
        return self::inRandomOrder()->take($count)->get();
    }
}
