<?php

namespace App\Http\Middleware;

use Illuminate\Auth\Middleware\Authenticate as Middleware;
use Illuminate\Contracts\Auth\Factory as Auth;

class Authenticate extends Middleware
{
    /**
     * Get the path the user should be redirected to when they are not authenticated.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return string|null
     */

     public function __construct(Auth $auth)
     {
         $this->auth = $auth;
         if(\Auth::check()){
            $uri = \Route::current()->uri;
            $url_list = ['admin/contacts','sms-add', 'sms-add/*', 'deals', 'dashboard/*', 'admin/resultcode', 'admin/emailsms', 'admin/script', 'admin/email-send', 'sms-templates', 'order-route', 'fields', 'add-contact', 'edit-contact'];
            if(in_array($uri, $url_list) && !\Session::has('pid')){
                \Redirect::to('project')->send();
            }
                
         }
     }

    protected function redirectTo($request)
    {
        if (! $request->expectsJson()) {
            return route('index');
        }
    }
}
