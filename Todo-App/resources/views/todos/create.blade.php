@extends('layout')
@section('title', 'Create')
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Create todo</div>

                    <div class="card-body">

                        @if($errors->any())
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach($errors->all() as $error)
                                        <li>{{$error}}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif

                        <form action="{{ route('todos.store') }}" method="POST">
                            @csrf
                            <div class="mb-3">
                                <label class="form-label">Title</label>
                                <input type="text" class="form-control" name="title">
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Description</label>
                                <textarea class="form-control" name="description" cols="5" rows="5"></textarea>
                            </div>

                            <div class="mb-3">
                                <label class="form-label">State</label>
                                <select class="form-select" aria-label="Default select example" name="state">
                                    <option value="1" selected>Not started</option>
                                    <option value="2">In progress</option>
                                    <option value="3">Done</option>
                                </select>
                            </div>
                            
                            <div class="d-flex justify-content-end gap-2">
                                <a href="{{ route('todos.index') }}" class="btn btn-secondary">Cancel</a>
                                <button type="submit" class="btn btn-success ">Create</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection