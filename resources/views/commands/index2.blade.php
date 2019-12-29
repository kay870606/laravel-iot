@extends('layout')

@section('content')

    <h1 class="title">Commands</h1>

    <form method="POST" action="/commands">
        @csrf

        <div class="field">
            <label class="label">Name</label>
            <div class="control">
                <input type="text" name="name" class="input" value="{{ old('name') }}" required>
            </div>
        </div>

        <div class="field">
            <label class="label">Operation</label>
            <div class="control">
                <input type="text" name="operation" class="input" value="{{ old('operation') }}" required>
            </div>
        </div>

        <div class="field">
            <div class="control">
                <button type="submit" class="button is-link">Create</button>
            </div>
        </div>

        @include ('errors')
    </form>

    <div class="table-container">
        <table class="table">
            <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Operation</th>
            </tr>
            </thead>
            <tbody>
            @foreach ($commands as $command)
                <tr>
                    <th>{{$command->id}}</th>
                    <td>{{$command->name}}</td>
                    <td>{{$command->operation}}</td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>

@endsection
