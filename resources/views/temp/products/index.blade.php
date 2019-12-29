@extends('layout')

@section('content')
    <h1 class="title">Products</h1>

    <form method="GET" action="/products/create">
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
                <th>EAN</th>
                <th>Name</th>
            </tr>
            </thead>
            <tbody>
            @foreach ($products as $product)
                <tr>
                    <th><a href="/products/{{ $product->id }}">{{$product->id}}</a></th>
                    <td>{{$product->ean}}</td>
                    <td>{{$product->name}}</td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>

@endsection
