<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Omikuji extends Model
{
    protected $unseis = ['大吉', '中吉', '小吉', '末吉', '凶'];
    
    public function shuffle()
    {
        $key = array_rand($this->unseis);
        $unsei = $this->unseis[$key];
        
        return $unsei;
    }
}
