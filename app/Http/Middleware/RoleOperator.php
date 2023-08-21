<?php

namespace App\Http\Middleware;

use App\Models\User;
use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

class RoleOperator
{

    public function handle(Request $request, Closure $next): Response
    {
        if (!Auth::check())
        {
            return redirect('login');
        }

        $user = Auth::user();

        if($user->role_id == User::ROLE_OPERATOR) {
            return $next($request);
        }

        return abort(404);
    }

}
