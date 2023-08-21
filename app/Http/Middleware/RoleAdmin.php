<?php

namespace App\Http\Middleware;

use App\Models\User;
use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

class RoleAdmin
{

    public function handle($request, Closure $next)
    {
        if (!Auth::check())
        {
            return redirect('login');
        }

        $user = Auth::user();

        if($user->role_id == User::ROLE_ADMIN) {
            return $next($request);
        }

        return abort(404);
    }
}
