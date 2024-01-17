@extends('layouts.master')

@section('title', 'New user')

@section('content')
  <form action="{{$router->generate('user_post')}}" method="post">
    <!-- name -->
    <div class="mb-3">
      <label for="inputName" class="form-label">Name</label>
      <input type="text" class="form-control" id="inputName" name="inputName">
    </div>
    <!-- password -->
    <div class="mb-3">
      <label for="inputPassword" class="form-label">Password</label>
      <input type="password" class="form-control" id="inputPassword" name="inputPassword">
    </div>
    <!-- email -->
    <div class="mb-3">
      <label for="inputEmail" class="form-label">Email</label>
      <input type="email" class="form-control" id="inputEmail" name="inputEmail">
    </div>
    <button type="submit" class="btn btn-primary" id="buttonCreate" name="buttonCreate">Create</button>
  </form>
@endsection