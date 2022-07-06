<?php

namespace App\Http\Requests;

use App\Abstracts\FormRequest;

class ReadingQuranRequest extends FormRequest
{
    public function rules()
    {
        return [
            'room_id' => ['required'],
            'student_id' => ['required'],
            'surah_number' => ['required'],
        ];
    }
}
