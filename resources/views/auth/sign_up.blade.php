@extends('layout')
@section('title')
    Sign Up
@endsection
@section('content')
    <div class="container d-flex justify-content-center mt-5">
        < <form method="POST" class="w-25">
            <h3 align="center" class="text-light">Sign Up</h3>
            <div class="form-group">
                <input type="email" class="form-control" id="email" name="email" placeholder="Enter email" />
            </div>
            <div class="form-group">
                <input type="text" class="form-control" id="firstName" name="firstName" placeholder="Enter username" />
            </div>
            <div class="form-group">
                <input type="password" class="form-control" id="password1" name="password1" placeholder="Enter password" />
            </div>
            <div class="form-group">
                <input type="password" class="form-control" id="password2" name="password2"
                    placeholder="Confirm password" />
            </div>
            <button type="submit" class="btn btn-primary w-100">Submit</button>
            </form>
    </div>
@endsection
