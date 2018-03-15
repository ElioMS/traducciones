<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ConfigurationController extends Controller
{
    /**
     * Translate the admin content
     * @param Request $request
     * @return Response
     */
    public function redirectByLanguage(Request $request)
    {
        $currentLanguage = app()->getLocale();
        // dd($currentLanguage);
        $language = $request->get('lang');
        // dd($currentLanguage, $language);
        ## Language available: ES, EN
        app()->setLocale($language);
        // dd($a);

        $referer = request()->headers->get('referer');

        // dd($referer);
        $referer = str_replace($currentLanguage, $language, $referer);

        return response()->json($referer);
    }

    public function redirectDynamicRoutesByLanguage(Request $request)
    {
        $currentLanguage = app()->getLocale();

        $language = $request->get('lang');
        $action = $request->get('action');
        $parameters = $request->get('parameters');
        // dd($parameters);
        ## Language available: ES, EN
        app()->setLocale($language);

        $action = str_replace('AppHttpControllers', '', $action);
        $action = explode('@', $action);

        $controller = 'App\Http\Controllers\\'.$action[0];

        $app = $controller::translate($language, $parameters);

        $route = route( $request->get('routeName') , $app);
        $route = str_replace($currentLanguage, $language, $route);
        // dd($route);
        return response()->json($route);
    }
}
