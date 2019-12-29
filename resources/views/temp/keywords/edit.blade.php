@extends('layout')

@section('content')
    <h1 class="title">Edit</h1>

    <form method="POST" action="/categories/{{ $category->id }}" style="margin-bottom: 1em;">
        @method('PATCH')
        @csrf

        <div class="field">
            <label class="label">Name</label>
            <div class="control">
                <input type="text" name="number" class="input" value="{{ $category->number }}" required>
            </div>
        </div>

        <div class="field">
            <label class="label">Name</label>
            <div class="control">
                <input type="text" name="name" class="input" value="{{ $category->name }}" required>
            </div>
        </div>

        <div class="field">
            <div class="control">
                <button type="submit" class="button is-link">Update</button>
            </div>
        </div>

    </form>

    @include ('errors')

    <form method="POST" action="/categories/{{ $category->id }}">
        @method('DELETE')
        @csrf

        <div class="field">
            <div class="control">
                <button type="submit" class="button">Delete</button>
            </div>
        </div>
    </form>
@endsection
