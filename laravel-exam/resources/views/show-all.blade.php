@extends('layouts.app')

@section('title')
    Liste des livres
@endsection

@section('content')

   <main class="container-expand-lg">

        <div class="custom-list-container">

            @if (session()->has("successDelete"))

                <div class="alert alert-success mt-3">
                    <p>Le livre a bien été supprimé !</p>
                </div>

            @endif

            @foreach ($books as $book)

            <div class="card custom-card">

                <div class="card-header custom-header-card">
                Identification number : {{ $book->id }}
                </div>

                <div class="card-body">

                <h5 class="card-title">{{ $book->name }}</h5>
                <h6 class="card-title">{{ $book->author }}</h6>
                <p class="card-text pt-2">{{ $book->avis }}</p>
                <p class="card-text"> Note : {{ $book->rating }}/5</p>
                
                <div class="custom-btn-group">
                <a href="{{ route('book.edit', $book->id)}}" class="btn btn-dark">Editer</a>

                <form onsubmit=" return confirm('Etes vous sûr de vouloir supprimer ce livre ?')" action="{{ route('delete', $book->id)}}" method="post">
                    @csrf
                    @method('DELETE')
                    <button  class="btn btn-danger btn-custom-danger" type="submit">Delete</button>
                  </form>
                </div>

                </div>

            </div>

            @endforeach 

            {{ $books->links() }}

        </div>

      

    </main>
    
@endsection