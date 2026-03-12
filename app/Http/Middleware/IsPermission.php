<?php

namespace App\Http\Middleware;
use Illuminate\Support\Facades\Auth; 
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Models\Permission;  

use Closure, Session, Helpers, URL, DB;

class IsPermission
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
   
    public function handle(Request $request, Closure $next)
    {                
        $route = Route::getRoutes()->match($request);
        $currentroute = $route->getName();  
           
        $permission = Auth::guard('admin')->user()->permissions;  

        if($permission < 0)
        {   
            
            if($currentroute == 'panel.meb_list' || $currentroute == 'panel.meb_form' || $currentroute == 'panel.meb_save' || $currentroute == 'panel.whitedesk_form' || $currentroute == 'panel.tc_query' || $currentroute == 'panel.whitedesk_save' || $currentroute == 'panel.scholarship_list' || $currentroute == 'panel.scholarship_user_list' || $currentroute ==  'panel.scholarship_delete' || $currentroute == 'panel.scholarship_save' || $currentroute == 'panel.scholarship_form' || $currentroute == 'panel.profile'
            || $currentroute == 'panel.apply_list' || $currentroute == 'panel.apply_submit' ||  $currentroute ==  'panel.apply_decline' || $currentroute ==  'panel.apply_cancel_certain' || $currentroute ==  'panel.apply_form' || $currentroute ==  'panel.apply_save'
            || $currentroute ==  'panel.apply_due_date' 
            ){
                view()->share('permission', $permission); 
                return $next($request);
                 
            }else{
                return redirect()->route('panel.scholarship_list'); 
            }
           
             
        } 

        if($permission != 0  && ($currentroute == 'panel.shop_list' || $currentroute == 'panel.profile' || $currentroute == 'panel.shop_save' || $currentroute == 'panel.shop_delete' || $currentroute == 'panel.shop_form')
        ){               
            view()->share('permission', $permission); 
            return $next($request);

        }
        else{

            if($permission != 0 ){
                return redirect()->route('panel.shop_list'); 
            }else{
                return $next($request);
            }
            
        }
        
    }
}
