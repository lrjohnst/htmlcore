<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Article;
use App\Models\Resource;
use App\Models\Page;


class ContentController extends Controller
{


    public function showResource(Request $request, string $slug) {
        $language = $this->getLanguageFromUrl($request);

        $content = Resource::select('resources.*', 'contents.*')
            ->join('contents', 'resources.content_id', '=', 'contents.id')
            ->where('contents.slug', $slug)
            ->where('contents.lang_iso_639_1', $language)
            ->first();

        if($content) {
            return view('resource', compact('content'));
        } else {
            return response()->view('404_' . $language, [], 404);
        }
    }

    public function showArticle(Request $request, string $slug) {
        $language = $this->getLanguageFromUrl($request);

        $content = Article::select('articles.*', 'contents.*')
            ->join('contents', 'articles.content_id', '=', 'contents.id')
            ->where('contents.slug', $slug)
            ->where('contents.lang_iso_639_1', $language)
            ->first();

        if($content) {
            return view('article', compact('content'));
        } else {
            return response()->view('404_' . $language, [], 404);
        }
    }

    public function showPage(Request $request, string $slug) {
        $language = $this->getLanguageFromUrl($request);

        $content = Page::select('pages.*', 'contents.*')
            ->join('contents', 'pages.content_id', '=', 'contents.id')
            ->where('contents.slug', $slug)
            ->where('contents.lang_iso_639_1', $language)
            ->first();

        if($content) {
            return view('page', compact('content'));
        } else {
            return response()->view('404_' . $language, [], 404);
        }
    }

    public function showFrontPage(Request $request) {
        $language = $this->getLanguageFromUrl($request) ?: config('htmlcore.default_language');

        $content = Page::select('pages.*', 'contents.*')
            ->join('contents', 'pages.content_id', '=', 'contents.id')
            ->where('contents.slug', config('htmlcore.front_page_' . $language))
            ->where('contents.lang_iso_639_1', $language)
            ->first();

        if($content) {
            return view('page', compact('content'));
        } else {
            return response()->view('404_' . $language, [], 404);
        }
    }


    private function getLanguageFromUrl(Request $request) {
        $path = $request->path();
        $segments = explode('/', $path);
        return $segments[0]; // assuming the language is always the first segment
    }
}
