@extends('layout')

@section('content')
    <h1 class="title">Show</h1>

    <form method="GET" action="/activities/{{ $activity->id }}/edit">
        @csrf

        <div class="field">
            <div class="control">
                <button type="submit" class="button is-link">Edit</button>
            </div>
        </div>
    </form>

    <div class="table-container">
        <table class="table">
            <tbody>
            <th>Name</th>
            <td>{{ $activity->name }}</td>
            </tbody>
            <tbody>
            <th>Image</th>
            <td>
                <figure class="image">
                    <img src="{{ $activity->image_url }}">
                </figure>
            </td>
            </tbody>
        </table>
    </div>

@endsection
