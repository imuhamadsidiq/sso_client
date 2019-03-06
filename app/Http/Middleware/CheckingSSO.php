<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Redis;

class CheckingSSO
{
    /**
     * Handle an incoming request.49313
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    { 
        //data redis dari server
         Redis::get('sso_user_id');
         Redis::get('sso_username');
         Redis::get('sso_email');
         Redis::get('sso_first_name');
         Redis::get('sso_last_name');
         Redis::get('sso_bu_id');
         Redis::get('sso_bu_name');
         Redis::get('sso_site_id');
         Redis::get('sso_site_name');
         Redis::get('sso_divisi_id');
         Redis::get('sso_divisi_name');
         Redis::get('sso_dept_id');
         Redis::get('sso_dept_name');
         Redis::get("sso_app_APP");
         Redis::get("sso_group_APP");
         Redis::get("sso_group_name_APP"); 
       
        if(Redis::get('sso_app_APP')){  
            return $next($request);
        }else{ 
            return \Redirect::away('http://192.168.254.196/sso');
        } 
    }
}
