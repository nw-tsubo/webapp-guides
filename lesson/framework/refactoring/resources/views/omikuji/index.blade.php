@extends('layouts.app')

@section('title', 'おみくじ')

@section('style')
<style type="text/css">
  .unsei {
    color: red;
    font-size: 32px;
  }
</style>
@endsection

@section('content')
<h1>おみくじ</h1>

<p>あなたの運勢は <span class="unsei">{{ $unsei }}</span> です</p>
<p>リファクタリング版</p>
@endsection