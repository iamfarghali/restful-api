<?php

namespace App\Http\Middleware;

use Closure;

class TokenAuth
{
    /**
     * Handle an incoming request.
     *
     * @param \Illuminate\Http\Request $request
     * @param \Closure                 $next
     * @return mixed
     */
    public function handle ( $request, Closure $next )
    {
        $token = $request->header( 'API-TOKEN' );
        // "secret" is a value for testing
        if ( $token !== 'secret' ) {
            return response()->json(['msg' => 'Your Token is Invalid!'], 401);
        }
        return $next( $request );
    }
}
