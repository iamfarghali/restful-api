<?php

namespace App\Http\Controllers;

use App\Article;
use App\Http\Resources\ArticleCollection;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class ArticleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index ()
    {
        $articles = Article::paginate( 10 );
        if ( count( $articles ) == 0 ) {
            return response()->json( null, 404 );
        }
        return response( new ArticleCollection( $articles ), 200 );
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store ( Request $request )
    {
        $rules = [
            'title' => 'required|min:10',
            'body'  => 'required|min:10'
        ];
        $validator = Validator::make( $request->all(), $rules );
        if ( $validator->fails() ) {
            return response()->json( $validator->errors(), 400 );
        }
        $article = Article::create( $request->all() );
        return response()->json( $article, 201 );
    }

    /**
     * Display the specified resource.
     *
     * @param \App\Article $article
     * @return \Illuminate\Http\Response
     */
    public function show ( Article $article )
    {
        if ( !$article->id ) {
            return response()->json( null, 404 );
        }
//        return response()->json( new ArticleResource( $article ), 200 );
        return response()->json( $article, 200 );
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param \App\Article             $article
     * @return \Illuminate\Http\Response
     */
    public function update ( Request $request, Article $article )
    {
        $article->update( $request->all() );
        return response()->json( $article, 200 );
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param \App\Article $article
     * @return \Illuminate\Http\Response
     */
    public function destroy ( Article $article )
    {
        if ( !$article->id ) {
            return response()->json( null, 404 );
        }
        $article->delete();
        return response()->json( null, 204 );
    }
}
