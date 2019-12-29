@extends('layout')

@section('content')

    <h1 class="title">Edit</h1>

    <form method="POST" action="/category-beacons/{{ $categoryBeacon->id }}" style="margin-bottom: 1em;">
        @method('PATCH')
        @csrf

        <div class="field">
            <label class="label">Category</label>
            <div class="select">
                <select name="category_id">
                    @foreach ($categories as $category)
                        <option value="{{$category->id}}">{{$category->number.' '.$category->name}}</option>
                    @endforeach
                </select>
            </div>
        </div>

        <div class="field">
            <label class="label">Beacon</label>
            <div class="select">
                <select name="beacon_id">
                    @foreach ($beacons as $beacon)
                        <option value="{{$beacon->id}}">{{$beacon->name}}</option>
                    @endforeach
                </select>
            </div>
        </div>


        <div class="field">
            <div class="control">
                <button type="submit" class="button is-link">Update</button>
            </div>
        </div>
    </form>

    @include ('errors')

    <form method="POST" action="/category-beacons/{{ $categoryBeacon->id }}">
        @method('DELETE')
        @csrf

        <div class="field">
            <div class="control">
                <button type="submit" class="button">Delete</button>
            </div>
        </div>
    </form>

@endsection
