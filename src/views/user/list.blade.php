@extends('layouts.master')

@section('title', 'Lista de usuarios')

@section('content')
  <a href="{{$router->generate('user_create')}}" class="btn btn-success">New User</a>
  <table class="table">
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">Name</th>
        <th scope="col">Password</th>
        <th scope="col">Email</th>
        <th>Actions</th>
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
          <a href="{{$router->generate('user_delete', ['id' => $user->id])}}" class="btn btn-danger">Delete</a>
          <a href="{{$router->generate('user_edit', ['id' => $user->id])}}" class="btn btn-warning">Edit</a>
        </td>
      </tr>
      @endforeach
    </tbody>
  </table>
@endsection