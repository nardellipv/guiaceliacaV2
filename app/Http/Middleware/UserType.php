<?php

namespace App\Http\Middleware;

use App\User;
use Closure;
use Illuminate\Support\Facades\Auth;

class UserType
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        $userType = User::where('id', Auth::user()->id)
            ->first();

        if ($userType->type === 'OWNER' OR $userType->type === 'CLIENT') {

            return redirect('/perfil');
        }else {

            return $next($request);
        }
    }
}
