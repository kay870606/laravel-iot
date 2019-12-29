@extends('layout')

@section('content')
    <h1 class="title">Show</h1>

    <form method="GET" action="/category-beacons/{{ $categoryBeacon->id }}/edit">
        @csrf
        <div class="field">
            <div class="control">
                <button type="submit" class="button is-link">Edit</button>
            </div>
        </div>
    </form>

    <div class="content">
        <p>{{ $categoryBeacon->category->number }}</p>

        <p>{{ $categoryBeacon->category->name }}</p>

        <p>{{ $categoryBeacon->beacon->name }}</p>


    </div>

@endsection
