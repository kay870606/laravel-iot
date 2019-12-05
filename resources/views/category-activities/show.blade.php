@extends('layout')

@section('content')
    <h1 class="title">Show</h1>

    <form method="GET" action="/category-activities/{{ $categoryActivity->id }}/edit">
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
            <th>Category number</th>
            <td>{{ $categoryActivity->category->number }}</td>
            </tbody>
            <tbody>
            <th>Category name</th>
            <td>{{ $categoryActivity->category->name }}</td>
            </tbody>
            <tbody>
            <th>Name</th>
            <td>{{ $categoryActivity->name }}</td>
            </tbody>
            <tbody>
            <th>Image</th>
            <td>
                <figure class="image">
                    <img src="{{ $categoryActivity->image_url }}">
                </figure>
            </td>
            </tbody>
        </table>
    </div>

@endsection
