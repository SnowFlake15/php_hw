<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Game extends Model
{
    use HasFactory;
    public function getGame(){
        return Game::all();
    }
    protected $fillable = [
        "title",
        "game_description",
        "rating"
    ];
}
