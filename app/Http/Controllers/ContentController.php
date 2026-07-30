<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Article;
use App\Models\Resource;
use App\Models\Page;
use Illuminate\Support\Facades\App;


class ContentController extends Controller
{


    public function showResource(Request $request, string $slug) {
        $language = App::currentLocale();

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
        $language = App::currentLocale();

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
        $language = App::currentLocale();

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
        $language = App::currentLocale();

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
}
