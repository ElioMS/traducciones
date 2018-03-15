<?php

namespace App\Http\Controllers\Config;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class LanguageController extends Controller
{
    public function setLocale(Request $request)
    {
    	$selectedLang = request('lang');

    	if (array_key_exists($selectedLang, config('app.locales'))) {
    		session()->put('locale', $selectedLang);
    	}

    	return redirect()->back();
    }

    public function switchLang(Request $request, $lang)
    {
    	$previous_url = url()->previous();
    	$current = app()->getLocale();

    	$referer = str_replace($current, $lang, $previous_url);

    	app()->setLocale($lang);

    	// dd($previous_url, $current, $lang ,$referer);

    	return redirect()->to($referer);
    }
}
