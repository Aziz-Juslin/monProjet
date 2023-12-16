<?php

namespace App\Http\Middleware;

use Closure;
use session;
use App\Models\Kumba;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class Finance
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {
        if(Session()->get('kumba_id') === ""){
            return redirect()->route('fina_kumba');
        }
        return $next($request);
    }
}
