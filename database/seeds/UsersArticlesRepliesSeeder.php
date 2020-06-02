<?php

use Illuminate\Database\Seeder;

class UsersArticlesRepliesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run ()
    {
        \DB::table( 'users' )->delete();

        factory( \App\User::class, 25 )->create()->each( function ( $user ) {
            $user->articles()
                 ->saveMany( factory( App\Article::class, rand( 1, 7 ) )->make() )->each( function ( $article ) {
                    $article->replies()
                            ->saveMany( factory( App\Reply::class, rand( 2, 10 ) )->make() );
                } );
        } );


    }
}
