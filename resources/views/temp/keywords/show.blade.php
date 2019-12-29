@extends('layout')

@section('content')
    <h1 class="title">Show</h1>

    <form method="GET" action="/categories/{{ $category->id }}/edit">
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
            <th>Number</th>
            <td>{{ $category->number }}</td>
            </tbody>
            <tbody>
            <th>Name</th>
            <td>{{ $category->name }}</td>
            </tbody>
        </table>
    </div>

@endsection
