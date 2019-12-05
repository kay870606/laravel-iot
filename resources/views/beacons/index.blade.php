@extends('layout')

@section('content')
    <h1 class="title">Beacons</h1>

    <form method="GET" action="/beacons/create">
        @csrf

        <div class="field">
            <div class="control">
                <button type="submit" class="button is-link">Create</button>
            </div>
        </div>
    </form>

    <div class="table-container">
        <table class="table">
            <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>MAC</th>
            </tr>
            </thead>
            <tbody>
            @foreach ($beacons as $beacon)
                <tr>
                    <th><a href="/beacons/{{ $beacon->id }}">{{$beacon->id}}</a></th>
                    <td>{{$beacon->name}}</td>
                    <td>{{$beacon->mac}}</td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>

@endsection
