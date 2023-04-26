@extends('layout')
@section('title')
    Login
@endsection
@section('content')
    <div class="container center">
        <div class="d-flex justify-content-center">
            <form method="POST" class="mt-5 w-25">
                <h3 align="center" class="text-light">Login</h3>
                <div class="form-group">
                    <input type="email" class="form-control" id="email" name="email" placeholder="Enter email"
                        class="bg-dark text-light" />
                </div>
                <div class="form-group">
                    <input type="password" class="form-control" id="password" name="password" placeholder="Enter password"
                        class="bg-dark text-light" />
                </div>
                <button type="submit" class="btn btn-primary w-100">Login</button>
            </form>

        </div>
    </div>
@endsection
