@extends('layout')

@section('content')
    <h1 class="title">Subcategories</h1>

    <form method="GET" action="/subcategories/create">
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
                <th>Category Number</th>
                <th>Category Name</th>
                <th>Order</th>
                <th>Name</th>
            </tr>
            </thead>
            <tbody>
            @foreach ($subcategories as $subcategory)
                <tr>
                    <th><a href="/subcategories/{{ $subcategory->id }}">{{$subcategory->id}}</a></th>
                    <td>{{$subcategory->category->number}}</td>
                    <td>{{$subcategory->category->name}}</td>
                    <td>{{$subcategory->order}}</td>
                    <td>{{$subcategory->name}}</td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>

@endsection
