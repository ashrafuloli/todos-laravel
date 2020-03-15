@extends('layout.app')

@section('title')
    Single Todo: {{ $todo->name }}
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

                        <h5 class="card-header"> {{ $todo->name }} </h5>

                        <div class="card-body">
                            <p>{{ $todo->description }}</p>

                            <a href="/todos/{{ $todo->id }}/edit" class="btn btn-info my-2 mr-2">Edit</a>
                            <a href="/todos/{{ $todo->id }}/delete" class="btn btn-danger my-2">Delete</a>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>

@endsection

