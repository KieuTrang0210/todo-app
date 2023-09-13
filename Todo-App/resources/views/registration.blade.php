@extends('layout')
@section('title', 'Registration')
@section('content')
    <div class="container">

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
                <div class="alert alert-success">{{session('success')}}</div>
            @endif
        </div>

        <div class="container " style="width: 350px">
            <p class="text-center fs-3" style="color: rgb(48, 117, 149);"><b>REGISTER</b></p>
            <form action="{{ route('registration.post') }}" method="POST">
                @csrf
                <div class="mb-3">
                    <input type="text" class="form-control" id="name" name="name" placeholder="Name">
                </div>
                <div class="mb-3">
                    <input type="email" class="form-control" id="email" name="email" placeholder="Email">
                </div>
                <div class="mb-3">
                    <input type="password" class="form-control" id="password" name="password" placeholder="Password">
                </div>
                <button type="submit" class="btn btn-outline-success w-100">Register</button>
            </form>
        </div>    
    </div>
@endsection