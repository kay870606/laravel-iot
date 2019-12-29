@extends('layout')

@section('content')
    <h1 class="title">Category Activities</h1>

    <form method="GET" action="/category-activities/create">
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
                <th>Name</th>
            </tr>
            </thead>
            <tbody>
            @foreach ($categoryActivities as $categoryActivity)
                <tr>
                    <th><a href="/category-activities/{{ $categoryActivity->id }}">{{$categoryActivity->id}}</a></th>
                    <td>{{$categoryActivity->category->number}}</td>
                    <td>{{$categoryActivity->category->name}}</td>
                    <td>{{$categoryActivity->name}}</td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>

@endsection
