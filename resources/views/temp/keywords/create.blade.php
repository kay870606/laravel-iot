@extends('layout')

@section('content')
    <h1 class="title">Create</h1>

    <form method="POST" action="/keywords">
        @csrf

        <div class="field">
            <label class="label">Name</label>
            <div class="control">
                <input type="text" name="name" class="input" required>
            </div>
        </div>

        <div class="field">
            <label class="label">Mapping</label>
            <div class="control">
                <textarea class="textarea" name="mapping" required></textarea>
            </div>
        </div>

        <div class="field">
            <div class="control">
                <button type="submit" class="button is-link">Create</button>
            </div>
        </div>

        @include ('errors')
    </form>
@endsection
