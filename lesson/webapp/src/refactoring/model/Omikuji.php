<?php
/*
 * このファイルは運勢のビジネスロジックに徹する
 */
 
class Omikuji
{
  protected $unseis = ['大吉', '中吉', '小吉', '末吉', '凶'];
  
  public function shuffle()
  {
    $key = array_rand($this->unseis);
    
    return $this->unseis[$key];
  }
}