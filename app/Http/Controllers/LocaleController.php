<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Session;
use App;

class LocaleController extends Controller
{
    function setLang(Request $request, $lang){
        switch($lang){
            case 'en':
            case 'ja':
            case 'zh-CN':
                App::setLocale($lang);
                Session::put('locale', App::getLocale());
                break;
            default:
                App::setLocale(config('app.fallback_locale'));
                Session::put('locale', App::getLocale());
                break;
        }
        return back();
    }
}
