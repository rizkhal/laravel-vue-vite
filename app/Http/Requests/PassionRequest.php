<?php

namespace App\Http\Requests;

use App\Abstracts\FormRequest;
use Illuminate\Support\Arr;
use Illuminate\Support\Collection;
use Illuminate\Validation\Rule;

class PassionRequest extends FormRequest
{
    public function prepareForValidation()
    {
        $this->merge(array_values($this->details));
    }

    public function attributes()
    {
        return [
            'details.*.key' => 'Kata kunci',
            'details.*.value' => 'Kata kunci',
        ];
    }

    public function rules(): array
    {
        return [
            'title' => ['required', 'min:4'],
            'summary' => ['required', 'min:4'],
            'description' => ['nullable', 'min:8'],
            'category_id' => ['required', Rule::exists('category_passions', 'id')],
            'details.*.key' => ['required', 'distinct'],
            'details.*.value' => ['required'],
        ];
    }

    public function getPassion(): array
    {
        return Arr::except($this->validated(), 'details');
    }

    public function getDetailPassions(): Collection
    {
        return collect(array_values($this->details));
    }
}
