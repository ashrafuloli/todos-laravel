@extends('layout.app')

@section('title')
    Todos List
@endsection

@section('content')
    <div class="content py-5">
        <div class="container">

            <div class="row">
                <div class="col-xl-12 text-center mb-5">
                    <h1>Todos Page</h1>
                </div>
            </div>

            <div class="row justify-content-center">
                <div class="col-xl-8">
                    <div class="card">
                        <h5 class="card-header">Todos</h5>
                        <div class="card-body">
                            <ul class="list-group">
                                @foreach($todos as $todo)
                                    <li class="list-group-item">
                                        {{ $todo->name }}
                                        <a href="/todos/{{ $todo->id }}" class="btn btn-primary btn-sm float-right">View</a>
                                    </li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
@endsection




