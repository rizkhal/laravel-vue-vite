<?php

namespace App\Abstracts;

use Illuminate\Foundation\Http\FormRequest as BaseFormRequest;

abstract class FormRequest extends BaseFormRequest
{
    public function authorize(): bool
    {
        return true;
    }
}
