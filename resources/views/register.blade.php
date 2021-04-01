@extends('master')
@section('content')
<div class="container custom-register">
    <div class="row">
        <div class="col-sm-4 col-sm-offset-4">
            <form action="register" method="POST">
                @csrf
                <div class="form-group">   
                    <label for="exampleInputEmail1">User Name</label>
                    <input class="form-control" type="text" name="email" id="email" placeholder="User Name">
                    </div>
                <div class="form-group">   
                    <label for="exampleInputEmail1">Email address</label>
                    <input class="form-control" type="text" name="email" id="email"  placeholder="Email Address">
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Password</label>
                    <input class="form-control" type="password" name="password" id="password" placeholder="Password">
                </div>
                <button type="submit" class="btn btn-default">Register</button>
            </form>
        </div>
    </div>
</div>
@endsection