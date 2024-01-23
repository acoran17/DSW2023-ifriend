@extends('layouts.master')

@section('content')
  <form method="post" 
  @if(isset($user))
    action="{{$router->generate('user_update', ['id' => $user->id])}}"
  @else
    action="{{$router->generate('user_post')}}"
  @endif
  >
    <!-- name -->
    <div class="mb-3">
      <label for="inputName" class="form-label">Name</label>
      <input type="text" class="form-control" id="inputName" name="inputName"
      @if(isset($user))
        value="{{$user->name}}"
      @endif
      >
    </div>
    <!-- password -->
    <div class="mb-3">
      <label for="inputPassword" class="form-label">Password</label>
      <input type="password" class="form-control" id="inputPassword" name="inputPassword"
      @if(isset($user))
        value="{{$user->password}}"
      @endif
      >
    </div>
    <!-- email -->
    <div class="mb-3">
      <label for="inputEmail" class="form-label">Email</label>
      <input type="email" class="form-control" id="inputEmail" name="inputEmail"
      @if(isset($user))
        value="{{$user->mail}}"
      @endif
      >
    </div>
    <button type="submit" class="btn btn-primary" id="buttonCreate" name="buttonCreate">Save</button>
  </form>
@endsection