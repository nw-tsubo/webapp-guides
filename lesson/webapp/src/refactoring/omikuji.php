<?php
/*
 * このファイルはコントロールに専念する
 */
 
require_once("model/Omikuji.php");

// モデルを生成
$omikuji = new Omikuji;

// おみくじを引いて運勢を取得
$unsei = $omikuji->shuffle();

// View に渡す値は $data 配列に入れることにする
$data['unsei'] = $unsei;

// View を表示する
include("view/omikuji.php");