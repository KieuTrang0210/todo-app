@extends('layout')
@section('title', 'Registration')
@section('content')
    <div class="container-fluid d-flex welcome">
        <img src="{{ asset('images/todo.png') }}" class="bg_login my-auto" alt="bg_login" style="width: 400px; height: 400px; margin-left: 180px">

        <div class="container" style="width: 350px; margin-left: 200px; margin-top: 150px;">
            <p class="text-center fs-3" style="color: rgb(48, 117, 149);"><b>REGISTER</b></p>
            <form>
                <div class="mb-3">
                    <input type="name" class="form-control" id="name" placeholder="Name">
                </div>
                <div class="mb-3">
                    <input type="email" class="form-control" id="email" placeholder="Email">
                </div>
                <div class="mb-3">
                    <input type="password" class="form-control" id="password" placeholder="Password">
                </div>
                <button type="submit" class="btn btn-outline-success w-100">Register</button>
            </form>
        </div>
    </div>
@endsection