<?php

namespace App\Http\Controllers;

use App\Facades\Quran;
use App\Enums\StudentQuranAbility;
use App\Http\Requests\ReadingQuranRequest;

class ReadingQuranController extends Controller
{
    public function index()
    {
        return view('pages.reading-quran.index');
    }

    public function create()
    {
        return view('pages.reading-quran.create', [
            'surahs' => Quran::surahs(),
            'abilities' => StudentQuranAbility::labels(),
        ])->title(__('Bacaan Al Quran'));
    }

    public function store(ReadingQuranRequest $request)
    {
        dd($request->all());
    }
}
