@extends('layouts.base', ['pageTitle'=> 'DC Comics - Edit'])

@section('mainContent')
<main>
    <div class="container">
        <h1>Edit Comic</h1>
        <form action="{{route('comics.update', $comic->id)}}" method="post">
            @csrf
            @method('PUT')
            <div class="mb-3 row">
                <label for="title" class="col-sm-2 col-form-label">Title</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="title" name="title" value="{{$comic->title}}">
                </div>
            </div>
            <div class="mb-3 row">
                <label for="title" class="col-sm-2 col-form-label">Description</label>
                <div class="col-sm-10">
                    <textarea name="description" id="description" cols="30" rows="10" class="form-control">{{$comic->description}}</textarea>
                </div>
            </div>
            <div class="mb-3 row">
                <label for="image" class="col-sm-2 col-form-label">Image url</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="image" name="image" value="{{$comic->image}}">
                </div>
            </div>
            <div class="mb-3 row">
                <label for="price" class="col-sm-2 col-form-label">Price</label>
                <div class="col-sm-10">
                    <input type="number" class="form-control" id="price" name="price" step=".01" min="1" max="100" value="{{$comic->price}}">
                </div>
            </div>
            <div class="mb-3 row">
                <label for="series" class="col-sm-2 col-form-label">Series</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="series" name="series" value="{{$comic->series}}">
                </div>
            </div>
            <div class="mb-3 row">
                <label for="sale_date" class="col-sm-2 col-form-label">Date of Sale</label>
                <div class="col-sm-10">
                    <input type="date" class="form-control" id="sale_date" name="sale_date" value="{{$comic->sale_date}}">
                </div>
            </div>
            <div class="mb-3 row">
                <label for="type" class="col-sm-2 col-form-label">Type</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="type" name="type" value="{{$comic->type}}">
                </div>
            </div>
            <div class="mb-3 text-center">
                <button type="submit" class="btn btn-outline-primary w-25 text-uppercase fs-4">Edit</button>
            </div>
        </form>
    </div>
</main>
@endsection