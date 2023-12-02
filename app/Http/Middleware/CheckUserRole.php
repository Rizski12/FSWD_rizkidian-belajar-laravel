<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class CheckUserRole
{
    public function handle($request, Closure $next, ...$groups)
    {
        $user = Auth::user();

        if ($user && in_array($user->group_id, $groups)) {
            return $next($request);
        }

        return redirect('/unauthorized'); // Ganti dengan rute yang sesuai untuk akses tidak diizinkan
    }
}
