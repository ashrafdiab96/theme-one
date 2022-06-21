<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LanguageController extends Controller
{
    /**
     * change_laguage function
     * function to change language
     * @param string $lang
     * @return redirect
     */
    public function change_laguage ($lang)
    {
        Session()->put('locale', $lang);
        app()->setLocale($lang);
        return redirect()->back();
    }
}
