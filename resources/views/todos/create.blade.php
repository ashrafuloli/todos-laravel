@extends('layout.app')

@section('title')
    Create Todos
@endsection

@section('content')
    <div class="content py-5">
        <div class="container">

            <div class="row">
                <div class="col-xl-12 text-center mb-5">
                    <h1>Create Todos</h1>
                </div>
            </div>

            <div class="row justify-content-center">
                <div class="col-xl-8">
                    <div class="card">
                        <h5 class="card-header">Create New Todos</h5>

                        <div class="card-body">

                            @if ($errors->any())
                                <div class="alert alert-danger">
                                    <ul class="list-group">
                                        @foreach ($errors->all() as $error)
                                            <li class="list-group-item">{{ $error }}</li>
                                        @endforeach
                                    </ul>
                                </div>
                            @endif

                            <form action="/store-todos" method="POST">
                                @csrf
                                <div class="form-group">
                                    <input type="text" name="name" class="form-control" placeholder="Name">
                                </div>
                                <div class="form-group">
                                    <textarea name="description" class="form-control" placeholder="Description" cols="5" rows="5"></textarea>
                                </div>
                                <div class="form-group text-center">
                                    <button type="submit" class="btn btn-success">Create Todo</button>
                                </div>
                            </form>
                        </div>
                    </div>

                </div>
            </div>

        </div>
    </div>
@endsection
