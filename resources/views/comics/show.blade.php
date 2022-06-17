@extends('layouts.base', ['pageTitle' => 'DC - '.$comic->title])

@section('mainContent')
    <main>
        <div class="container">
            <section id="first-sec-single" class="d-flex justify-content-between align-items-center">
                <div class="comic-box">
                    <img src="{{$comic->image}}" alt="{{$comic->title}}">
                    <span class="text-capitalize">{{$comic->type}}</span>
                    <span>View Gallery</span>
                </div>
                <div class="d-grid gap-2">
                    <a href="{{route('comics.edit', $comic->id)}}" class="btn btn-outline-primary">Edit</a>
                    <form id="form-delete" action="{{route('comics.destroy', $comic->id)}}" method="post">
                        @csrf
                        @method('DELETE')
                        <button id="button-delete" type="submit" class="btn btn-outline-danger">Delete</button>
                    </form>
                    <div id="cancel"></div>
                </div>
            </section>
            <section id="second-sec-single">
                <h1>{{$comic->title}}</h1>
                <div class="row g-4">
                    <div class="col-6">
                        <h3>Description</h3>
                        <p>{{$comic->description}}</p>
                    </div>
                    <div class="col-6">
                        <div class="info">
                            <p class="mb-0"><span>Series: </span>{{$comic->series}}</p>
                        </div>
                        <div class="info">
                            <p class="mb-0"><span>Type: </span>{{$comic->type}}</p>
                        </div>
                        <div class="info">
                            <p class="mb-0"><span>Price: </span>{{$comic->price}}&euro;</p>
                        </div>
                        <div class="info">
                            <p class="mb-0"><span>Date of sale: </span>{{$comic->sale_date}}</p>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </main>
@endsection