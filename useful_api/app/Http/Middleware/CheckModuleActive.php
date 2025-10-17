<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use App\Models\UserModule;

class CheckModuleActive
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {       
        $module = UserModule::where('user_id')
                            ->where('module_id')
                            ->first();

        if (!$module || !$module->active) {
            return response()->json([
                'message' => 'Module inactive. Please activate this module to use it.'
            ], 403);
        }
        return $next($request);
    }
}
