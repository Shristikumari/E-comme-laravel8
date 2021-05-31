@extends('master')
@section("content")
<div class="container custom-login">
<div class="row">
<div class="col-sm-4 col-sm-offset-4">
<form action="register" method="post">
  <div class="form-group">
    @csrf
    <label for="exampleInputName">User Name</label>
    <input type="Name" class="form-control" name="name" id="exampleInputName" placeholder="Name">
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Email address</label>

    <label for="exampleInputEmail1">Email address</label>
    <input type="email" class="form-control" name="email" id="exampleInputEmail1" placeholder="Email">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Password</label>
    <input type="password" class="form-control" name="password" id="exampleInputPassword1" placeholder="Password">
  </div>
  <button type="submit" class="btn btn-default">Register</button>
</form>

</div>
</div>
</div>
@endsection