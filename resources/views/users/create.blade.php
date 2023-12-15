@extends('layouts.app')
@section('content')
<form action="{{route('user_store')}}" method="POST">
    @csrf
    <div class="mb-3">
      <label for="exampleInputEmail1" class="form-label">Email address</label>
      <input type="email" class="form-control" id="exampleInputEmail1" name = "email"aria-describedby="emailHelp">
      
    </div>
    <div class="mb-3">
      <label for="exampleInputPassword1" class="form-label">Password</label>
      <input type="password" class="form-control" id="exampleInputPassword1" name = "password">
    </div>
    <div class="mb-3">
      <label for="exampleInputPassword1" class="form-label">Name</label>
      <input type="text" class="form-control" id="exampleInputPassword1" name = "name">
    </div>
    <div class="mb-3">
      <label for="exampleInputPassword1" class="form-label">Alamat</label>
      <input type="text" class="form-control" id="exampleInputPassword1" name = "user_alamat">
    </div>
    <div class="mb-3">
      <label for="exampleInputPassword1" class="form-label">Hp</label>
      <input type="text" class="form-control" id="exampleInputPassword1" name = "user_hp">
    </div>
    <div class="mb-3">
      <label for="exampleInputPassword1" class="form-label">Pos</label>
      <input type="text" class="form-control" id="exampleInputPassword1" name = "user_pos">
    </div>
    <div class="mb-3">
      <label for="exampleInputPassword1" class="form-label">Role</label>
      <input type="text" class="form-control" id="exampleInputPassword1" name = "user_role">
    </div>
    <label for="exampleInputPassword1" class="form-label">Aktif</label>
      <input type="text" class="form-control" id="exampleInputPassword1" name = "user_aktif">
  
    <button type="submit" class="btn" style="background-color: #F08080">Submit</button>
  </form>
@endsection