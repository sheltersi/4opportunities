<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class CheckProfileCompletion
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        $user = $request->user();

        // If no user is authenticated, continue
        if (!$user) {
            return $next($request);
        }

        // If user is authenticated but email is not verified, redirect to verification notice
        if (!$user->hasVerifiedEmail()) {
            // Don't redirect if already on verification notice page
            if (!$request->routeIs('verification.notice', 'verification.verify', 'logout')) {
                return redirect()->route('verification.notice');
            }
        }

        // If user is authenticated, email is verified, but hasn't created a profile yet
        // redirect them to profile creation (except if they're already on that page or logging out)
        if ($user->hasVerifiedEmail() &&
            !$user->candidateProfile &&
            !$request->routeIs('profile.create', 'profile.store', 'logout', 'verification.notice')) {

            return redirect()->route('profile.create');
        }

        return $next($request);
    }
}
