<?php

// TODO => Cache Strategy

namespace App\Services;

use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Http;

class Quran
{
    public function surahs()
    {
        $response = Http::quran()->get('/v1/surah');

        return $response->json();
    }

    public function juz(int $numberOfJuz)
    {
        $response = Http::quran()->get("/v1/juz/{$numberOfJuz}/en.asad");

        return $response->json();
    }
}
