@extends('layouts.app')

@section('title')
    Accueil
@endsection

@section('content')

    <main class="container-expand-lg">

        <div class="custom-main-div-presentation">

            <div class="custom-main-div-text">
            <h1 class="custom-main-div-text-h1">Bienvenue !</h1>
            <p class="custom-main-div-text-p">Voici un de mes projets d'examen réalisé via Laravel. Le but de cet exercice est de créer un CRUD. Sur cette page, vous pourrez vous orientez vers la création d'une liste de livre que vous avez lu.</p>
            </div>

        </div>

        <div class="custom-main-div-choix">

            <a href=" {{ route('show-all') }}">
                <div class="custom-main-div-voir">

                    <h2>Voir la liste</h2>

                </div>
            </a>    

            <a href="{{ route('create') }}">
                
                <div  class="custom-main-div-creer">

                    <h2>Ajouter un livre</h2>

                </div>
            </a>

        </div>

    </main>
    
@endsection