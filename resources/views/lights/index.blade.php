@extends('layout')

@section('content')

    <form method="POST" action="/lights/1">
        @method('PATCH')
        @csrf

        <div class="field">
            <div class="control">
                <button type="submit" class="button is-link">Update</button>
            </div>
        </div>

        @include ('errors')
    </form>

@endsection
