<?php

namespace App\Http\Controllers;

use App\Models\Books;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class bookController extends Controller
{
    // ALL GET - Return view
    
    public function index()
    {
        return view('index');
    }

    public function create()
    {
        return view('create');
    }

    public function showAll()
    {
        $books = Books::orderBy('name', 'asc')->paginate(2);
        return view('show-all', compact('books'));
    }

    

    // ----------------------------------------------------------------

    // ALL POST - Return view

    public function store(Request $request)
    {

        $validator = Validator::make($request->all(), 
        
        [
            "name"                                    => [ "required", "min:2" , "max:100"],
            "author"                                  => [ "required", "max:100", "min:2" ],
            "avis"                                    => [ "max:3000", "nullable" ],
            "rating"                                  => [ "required", "integer" ,"min:1", "max:5"],
        ], 
        [
            "name.required"                             => "Le nom du livre est obligatoire.",
            "name.max"                                  => "Le nom du livre doit comporter au maximum 100 caractères.",
            "name.min"                                  => "Le nom du livre doit comporter au minimum 2 caractères.",

            "author.required"                           => "Le nom de l'auteur est obligatoire.",
            "author.max"                                => "Le nom de l'auteur doit contenir au maximum 100 caractères.",
            "author.min"                                => "Le nom de l'auteur doit contenir au minimum 2 caractères.",
            
            "avis.max"                                  => "L'avis doit contenir maximum 3000 caractères.",

            "rating.required"                           => "La note du livre est requis",
            "rating.min"                                => "La note doit être égale ou supérieure à 1.",
            "rating.max"                                => "La note ne pas être supérieur à 5.",
            "rating.integer"                            => "Veuillez rentrer un nombre entier"


        ]);

        if ($validator->fails())
        {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        else 
        {
            $book = new Books();
            $book -> name = request('name');
            $book -> author = request('author');
            $book -> avis = request('avis');
            $book -> rating = request('rating');

            
            $book -> save();

            return back()->with("success","Le livre a été ajouté avec succès !");
        }
    }

    // EDIT

    public function edit($id)
    {
        $book = Books::findOrFail($id);

        return view('edit', compact('book'));
    }


    // DELETE 

    public function delete($id) {
        
            $bookdelete = Books::find($id);
            $bookdelete->delete(); 
     
            return redirect('/show')->with('successDelete', 'Le livre a été supprimé.'); 
       
    }

    // UPDATE

    public function update(Request $request, $id) {

        $validator = Validator::make($request->all(), 
        
        [
            "name"                                    => [ "required", "min:2" , "max:100"],
            "author"                                  => [ "required", "max:100", "min:2" ],
            "avis"                                    => [ "max:3000", "nullable" ],
            "rating"                                  => [ "required", "integer", "min:1", "max:5"],
        ], 
        [
            "name.required"                             => "Le nom du livre est obligatoire.",
            "name.max"                                  => "Le nom du livre doit comporter au maximum 100 caractères.",
            "name.min"                                  => "Le nom du livre doit comporter au minimum 2 caractères.",

            "author.required"                           => "Le nom de l'auteur est obligatoire.",
            "author.max"                                => "Le nom de l'auteur doit contenir au maximum 100 caractères.",
            "author.min"                                => "Le nom de l'auteur doit contenir au minimum 2 caractères.",
            
            "avis.max"                                  => "L'avis doit contenir maximum 3000 caractères.",

            "rating.required"                           => "La note du livre est requis",
            "rating.min"                                => "La note doit être égale ou supérieure à 1.",
            "rating.max"                                => "La note ne pas être supérieur à 5.",
            "rating.integer"                            => "Veuillez rentrer un nombre entier"


        ]);

        if ($validator->fails())
        {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        else 
        {
            $book = Books::find($id);
            $book -> name = request('name');
            $book -> author = request('author');
            $book -> avis = request('avis');
            $book -> rating = request('rating');
            
            $book -> update();

            return back()->with("successUpdate","Le livre a été ajouté avec succès !");
        }

    }
}
 