@extends('layout')
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Dashboard</div>

                    <div class="card-body">

                        @if(session()->has('success'))
                            <div class="alert alert-success" id="success-alert">{{session('success')}}</div>
                        @endif

                        @if (count($todos) > 0)
                            <table class="table table-striped">
                                <thead>
                                    <tr class="text-center">
                                        <th scope="col">Title</th>
                                        <th scope="col">Description</th>
                                        <th scope="col">State</th>
                                        <th scope="col">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($todos as $todo)
                                        @if($todo->user_id === Auth::id())
                                            <tr>
                                                <td class="text-center">{{ $todo->title }}</td>
                                                <td class="text-center">{{ $todo->description }}</td>
                                                <td class="text-center">
                                                    @if($todo->state == 'Not started')
                                                        <a href="#" class="btn btn-secondary">Not started</a>
                                                    @elseif($todo->state == 'In progress')
                                                        <a href="#" class="btn btn-info">In progress</a>
                                                    @else
                                                        <a href="#" class="btn btn-success">Done</a>
                                                    @endif
                                                </td>
                                                <td class="d-flex justify-content-center gap-2">
                                                    <a href="#" class="btn btn-info"> <i class="bi bi-eye-fill"></i> </a>
                                                    <a href="#" class="btn btn-warning"> <i class="bi bi-pencil-fill"></i> </a>
                                                    <form action="#" method="post">
                                                        @csrf
                                                        @method('DELETE')
                                                        <button class="btn btn-danger text-dark" onclick="return confirm('Are you sure you want to delete?')">  <i class="bi bi-trash3-fill"></i>  </button>
                                                    </form>
                                                </td>
                                            </tr>
                                        @endif
                                    @endforeach   
                                </tbody>
                            </table>
                        @else
                        <h5>No todos are created yet.</h5>
                        @endif
                        
                        <a href="{{ route('todos.create') }}" class="btn btn-primary mt-4">Create</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

