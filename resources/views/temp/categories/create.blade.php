@extends('layout')

@section('content')

    <h1 class="title">Create</h1>

    <form method="POST" action="/categories">
        @csrf

        <div class="field">
            <label class="label">Number</label>
            <div class="control">
                <input type="text" name="number" class="input" required>
            </div>
        </div>

        <div class="field">
            <label class="label">Name</label>
            <div class="control">
                <input type="text" name="name" class="input">
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
