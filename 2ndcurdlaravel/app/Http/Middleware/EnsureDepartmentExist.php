<?php

namespace App\Http\Middleware;
use App\Models\Department;
use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class EnsureDepartmentExist
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next )
    { Log::debug($request->route()->parameters());
        $isdept= Department::find(2)->employees;
        if(0){
            return response()->json('department exist');
        }
        return $next($request);
    }

}
