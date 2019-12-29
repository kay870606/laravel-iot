@extends('layout')

@section('content')
    <h1 class="title">Show</h1>

    <form method="GET" action="/products/{{ $product->id }}/edit">
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
            <th>EAN</th>
            <td>{{ $product->ean }}</td>
            </tbody>
            <tbody>
            <th>Name</th>
            <td>{{ $product->name }}</td>
            </tbody>
            <tbody>
            <th>Price</th>
            <td>{{ $product->price }}</td>
            </tbody>
            <tbody>
            <th>Description</th>
            <td>{{ $product->description }}</td>
            </tbody>
            <tbody>
            <th>Specification</th>
            <td>{{ $product->specification }}</td>
            </tbody>
            <tbody>
            <th>Image</th>
            <td>
                <figure class="image is-128x128">
                    <img src="{{  $product->url  }}">
                </figure>
            </td>
            </tbody>
        </table>
    </div>

@endsection
