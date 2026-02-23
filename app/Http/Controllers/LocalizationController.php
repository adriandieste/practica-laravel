<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LocalizationController extends Controller
{
    public function locale($locale)
    {
        if (!in_array($locale, ['es', 'en', 'fr'])) {
            $locale = 'es';
        }
        session(['locale' => $locale]);
        app()->setLocale($locale);
        
        return redirect()->back();
    }
}
