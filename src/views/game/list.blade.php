@extends('layouts.master')

@section('title', 'Games')

@section('content')
  <form method="post" action="{{$router->generate('game_post')}}">
    <input type="text" id="inputName" name="inputName">
    <input type="submit" value="+" class="btn btn-success">
  </form>
  <table class="table">
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">Name</th>
        <th scope="col">id_admin</th>
        <th>Actions</th>
      </tr>
    </thead>
    <tbody>
      @foreach($games as $game)
      <tr>
        <th scope="row">{{ $game->id }}</th>
        <td>{{ $game->name }}</td>
        <td>{{ $game->id_admin }}</td>
        <td>
          <a href="{{$router->generate('game_delete', ['id' => $game->id])}}" class="btn btn-danger">Delete</a>
          <a href="{{$router->generate('game_edit', ['id' => $game->id])}}" class="btn btn-warning">Edit</a>
        </td>
      </tr>
      @endforeach
    </tbody>
  </table>
@endsection