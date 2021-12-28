<?php

namespace App\Http\Middleware;

use App\Models\User;
use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Cookie;

class CreatorMiddleware
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
        $user = User::where('email', Cookie::get('email'))->first();

        if($user != NULL) {
            if($user->fullName == NULL) {
                return redirect('/finishup');
            } else if($user->roleStatus != '0') {
                return redirect('/respondent/home');
            } else {
                return $next($request);
            }
        }

        return redirect('/login');
    }
}
