@extends('layouts.app')

@section('title')
    Modifier un livre
@endsection

@section('content')

<main class="container-expand-lg">

    <div class="custom-main-create-container">

        <div class="row mb-3 custom-form-create">

            <form action="{{ route('book.update', $book->id) }}" method="POST">

                @csrf
                @method('PUT')

                <legend>Modifier le livre :</legend>

                    <div class="mb-3">
                        <label for="name" class="form-label">Nom du livre</label>
                        <input type="text" id="name" name="name" value=" {{ $book->name }}"  class="form-control" placeholder="ex: La villa aux étoffes">
                        <div class="text-danger">{{ $errors->first("name") }}</div>
                    </div>

                    <div class="mb-3">
                        <label for="author" class="form-label">Auteur</label>
                        <input type="text" class="form-control" value="{{ $book->author }}" id="author" name="author" placeholder="ex: Anne Jacobs">
                        <div class="text-danger">{{ $errors->first("author") }}</div>
                    </div>

                    <div class="mb-3">
                        <label for="avis" class="form-label">Avis</label>
                        <textarea class="form-control" id="avis" name="avis" placeholder="Donner votre avis. (max: 255 caractères)" rows="3">{{ $book->avis }}</textarea>
                        <div class="text-danger">{{ $errors->first("avis") }}</div>
                    </div>

                    <div class="mb-3">
                        <label for="rating" class="form-label">Note</label>
                        <input type="number" min="1" max="5" value="{{ $book->rating }}" class="form-control" id="rating" name="rating" placeholder="Noter votre livre (1 à 5)">
                        <div class="text-danger">{{ $errors->first("rating") }}</div>
                    </div>

                    <button type="submit" class="btn btn-dark">Modifier</button>

                @if (session()->has("successUpdate"))

                <div class="alert alert-success mt-3">
                    <p>Le livre a bien été crée !</p>
                </div>

                @endif

            </form>

        </div>

        <div class="custom-main-create-img">

            <img src=" {{ asset('img/book-create.jpeg') }}" alt="livre en noir et blanc" >

        </div>

    </div>

</main>
    
@endsection