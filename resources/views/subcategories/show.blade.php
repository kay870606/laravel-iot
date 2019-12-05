@extends('layout')

@section('content')
    <h1 class="title">Show</h1>

    <form method="GET" action="/subcategories/{{ $subcategory->id }}/edit">
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
            <td>{{ $subcategory->category->number }}</td>
            </tbody>
            <tbody>
            <th>Category name</th>
            <td>{{ $subcategory->category->name }}</td>
            </tbody>
            <tbody>
            <th>Order</th>
            <td>{{ $subcategory->order }}</td>
            </tbody>
            <tbody>
            <th>Name</th>
            <td>{{ $subcategory->name }}</td>
            </tbody>
        </table>
    </div>

@endsection
