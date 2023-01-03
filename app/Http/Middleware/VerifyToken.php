<?php

namespace App\Http\Middleware;

use Closure;

use Illuminate\Contracts\Auth\Guard;
use Illuminate\Http\RedirectResponse;
use App\Models\Usuario_Operador;

class VerifyToken
{
   /**
	 * The Guard implementation.
	 *
	 * @var Guard
	 */
	protected $auth;
        protected $operador;

	/**
	 * Create a new filter instance.
	 *
	 * @param  Guard  $auth
	 * @return void
	 */
	public function __construct(Guard $auth)
	{
		$this->auth = $auth;
                $this->model = new Usuario_Operador();
	}

	/**
	 * Handle an incoming request.
	 *
	 * @param  \Illuminate\Http\Request  $request
	 * @param  \Closure  $next
	 * @return mixed
	 */
	public function handle($request, Closure $next)
	{
		
		 //$header = $request->header('Authorization');
		
		if(!$request->ajax()) {
            // Handle the non-ajax request
            return response('Unauthorized.', 403);
			
        }
		else
		{
			
			return $next($request);
			
		}

            
            
		
	}
}
