<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Content;

class ContentController extends Controller
{
    public function index()
    {
        $contents = Content::with(['category', 'wallet'])
            ->latest()
            ->get()
            ->map(function ($content) {
                return [
                    'id'         => $content->id,
                    'name'       => $content->name,
                    'logo'       => $content->logo,
                    'headline'   => $content->headline,
                    'category'   => $content->category?->name,
                    'badges'     => $content->badges,
                    'highlight'  => $content->highlight,
                    'features'   => $content->features,
                    'currencies' => $content->currencies,
                    'wallet'     => $content->wallet ? [
                        'provider'     => $content->wallet->provider,
                        'is_supported' => $content->wallet->is_supported,
                    ] : null,
                    'link'       => $content->link,
                ];
            });

        return response()->json([
            'status'  => true,
            'message' => 'Success fetch contents',
            'data'    => $contents
        ], 200);
    }
}
