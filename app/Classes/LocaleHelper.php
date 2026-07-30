<?php

namespace App\Classes;

use Illuminate\Http\Request;

class LocaleHelper
{

    /**
     * Takes Request object as input and returns a selected ISO 3166 2-character language code.
     * @param Request $request
     * @return string|null
     */
    public static function getLanguageByRequest(Request $request) {

        $availableLanguages = config('htmlcore.available_languages', []);
        $fallbackLanguage = config('app.fallback_locale', 'la');

        // Step 1: Check if language is in URL and valid.
        $lang = self::getLanguageFromUrl($request);
        if (in_array($lang, $availableLanguages)) {
            return $lang;
        }

        // Step 2: Use browser's preferred language if available.
        $lang = $request->getPreferredLanguage($availableLanguages);
        if ($lang) {
            return $lang;
        }

        // Step 3: Default fallback language.
        return $fallbackLanguage;
    }


    /**
     * Extracts the language from the URL (first segment).
     */
    private static function getLanguageFromUrl(Request $request)
    {
        $path = $request->path();
        $segments = explode('/', $path);
        return $segments[0] ?? null; // Assuming language is always the first segment.
    }
}
