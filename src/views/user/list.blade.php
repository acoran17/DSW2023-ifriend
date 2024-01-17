@extends('layouts.master')

@section('title', 'Lista de usuarios')

@section('content')
  <h2>Tabla de usuarios</h2>
  <table class="table">
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">Name</th>
        <th scope="col">Password</th>
        <th scope="col">Email</th>
      </tr>
    </thead>
    <tbody>
      @foreach($users as $user)
      <tr>
        <th scope="row">{{ $user->id }}</th>
        <td>{{ $user->name }}</td>
        <td>{{ $user->password }}</td>
        <td>{{ $user->mail }}</td>
        <td>
          <a href="/users/{{$user->id}}/delete" class="btn btn-danger">Delete</a>
        </td>
      </tr>
      @endforeach
    </tbody>
  </table>
@endsection