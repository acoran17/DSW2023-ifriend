@extends('layouts.master')

@section('title', 'Edit Game')

@section('content')
  <form method="post" action="{{$router->generate('game_update', ['id' => $game->id])}}">
    <!-- name -->
    <div class="mb-3">
      <label for="inputName" class="form-label">Name</label>
      <input type="text" class="form-control" id="inputName" name="inputName" value="{{$game->name}}">
    </div>
    <button type="submit" class="btn btn-primary" id="buttonCreate" name="buttonCreate">Save</button>
  </form>
@endsection