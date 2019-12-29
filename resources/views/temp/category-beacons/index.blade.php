@extends('layout')

@section('content')
    <h1 class="title">Category Beacon</h1>

    <form method="GET" action="/category-beacons/create">
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
                <th>Category number</th>
                <th>Category name</th>
                <th>Beacon name</th>
            </tr>
            </thead>
            <tbody>
            @foreach ($categoryBeacons as $categoryBeacon)
                <tr>
                    <th><a href="/category-beacons/{{ $categoryBeacon->id }}">{{$categoryBeacon->id}}</a></th>
                    <td>{{$categoryBeacon->category->number}}</td>
                    <td>{{$categoryBeacon->category->name}}</td>
                    <td>{{$categoryBeacon->beacon->name}}</td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>

@endsection
