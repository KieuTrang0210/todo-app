@extends('layout')
@section('title', 'Login')
@section('content')
    <div class="container-fluid d-flex welcome">
        <img src="{{ asset('images/todo.png') }}" class="bg_login my-auto" alt="bg_login" style="width: 400px; height: 400px; margin-left: 180px">

        <div class="container login" style="width: 350px; margin-left: 200px; margin-top: 150px;">
            <p class="text-center fs-3" style="color: rgb(48, 117, 149);"><b>LOGIN</b></p>
            <form>
                <div class="mb-3">
                    <input type="email" class="form-control" id="email" placeholder="Email">
                </div>
                <div class="mb-3">
                    <input type="password" class="form-control" id="password" placeholder="Password">
                </div>
                <button type="submit" class="btn btn-outline-success w-100">Login</button>
            </form>
            
            <div class="forgot">
                <a href="#" class=" text-decoration-none" style="color: rgb(48, 117, 149);">Forgot Password?</a>
            </div>
            <div class="create text-center mt-5">
                <a href="{{route('registration.index')}}" class="text-decoration-none fs-5" style="color: rgb(48, 117, 149);">Create your account <i class="bi bi-caret-right-fill"></i></a>
            </div>
        </div>
    </div>
@endsection