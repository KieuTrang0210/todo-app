@extends('layout')
@section('title', 'Login')
@section('content')
    <div class="container-fluid welcome">

        <div class="mt-5">
            @if($errors->any())
                <div class="col-12">
                    @foreach($errors->all() as $error)
                        <div class="alert alert-danger">{{$error}}</div>
                    @endforeach
                </div>
            @endif

            @if(session()->has('error'))
                <div class="alert alert-danger">{{session('error')}}</div>
            @endif

            @if(session()->has('success'))
                <div class="alert alert-success" id="success-alert">{{session('success')}}</div>
            @endif
        </div>


            <div class="container login" style="width: 350px;">
                <p class="text-center fs-3" style="color: rgb(48, 117, 149);"><b>LOGIN</b></p>
                <form action="{{ route('login.post') }}" method="POST">
                    @csrf
                    <div class="mb-3">
                        <input type="email" class="form-control" id="email" name="email" placeholder="Email">
                    </div>
                    <div class="mb-3">
                        <input type="password" class="form-control" id="password" name="password" placeholder="Password">
                    </div>
                    <button type="submit" class="btn btn-outline-success w-100">Login</button>
                </form>
                
                <div class="forgot">
                    <a href="#" class=" text-decoration-none" style="color: rgb(48, 117, 149);">Forgot Password?</a>
                </div>
                <div class="create text-center mt-5">
                    <a href="{{route('registration')}}" class="text-decoration-none fs-5" style="color: rgb(48, 117, 149);">Create your account <i class="bi bi-caret-right-fill"></i></a>
                </div>
            </div>

    </div>
@endsection
