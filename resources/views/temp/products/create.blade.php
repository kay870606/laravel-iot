@extends('layout')

@section('content')
    <h1 class="title">Create</h1>

    <form method="POST" action="/products" enctype="multipart/form-data">
        @csrf

        <div class="field">
            <label class="label">Subcategory</label>
            <div class="select">
                <select name="subcategory_id">
                    @foreach ($subcategories as $subcategory)
                        <option
                            value="{{$subcategory->id}}">{{$subcategory->category->number.'  '.$subcategory->category->name.' '.$subcategory->name}}</option>
                    @endforeach
                </select>
            </div>
        </div>

        <div class="field">
            <label class="label">EAN</label>
            <div class="control">
                <input type="text" name="ean" class="input" required>
            </div>
        </div>

        <div class="field">
            <label class="label">Name</label>
            <div class="control">
                <input type="text" name="name" class="input" required>
            </div>
        </div>


        <div class="field">
            <label class="label">Price</label>
            <div class="control">
                <input type="text" name="price" class="input" required>
            </div>
        </div>

        <div class="field">
            <label class="label">Description</label>
            <div class="control">
                <textarea class="textarea" name="description" required></textarea>
            </div>
        </div>

        <div class="field">
            <label class="label">Specification</label>
            <div class="control">
                <textarea class="textarea" name="specification" required></textarea>
            </div>
        </div>

        <div class="field">
            <label class="label">Image</label>
            <input type="file" name="image" required>
        </div>

        <div class="field">
            <div class="control">
                <button type="submit" class="button is-link">Create</button>
            </div>
        </div>

        @include ('errors')
    </form>
@endsection
