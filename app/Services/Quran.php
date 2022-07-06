<?php

// TODO => Cache Strategy

namespace App\Services;

use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Http;

class Quran
{
    public function surahs()
    {
        if (!Cache::has('surahs')) {
            $response = Http::quran()->get('/v1/surah');

            if ($response->ok()) {
                return Cache::rememberForever('surahs', fn () => $response->json()['data']);
            }
        }

        return Cache::get('surahs');
    }

    public function juz(int $numberOfJuz)
    {
        $response = Http::quran()->get("/v1/juz/{$numberOfJuz}/en.asad");

        return $response->json();
    }
}
