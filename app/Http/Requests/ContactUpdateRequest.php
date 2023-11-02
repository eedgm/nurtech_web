<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ContactUpdateRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     */
    public function rules(): array
    {
        return [
            'from' => ['required', 'max:255', 'string'],
            'subject' => ['required', 'max:255', 'string'],
            'to' => ['required', 'max:255', 'string'],
            'cc' => ['nullable', 'max:255', 'string'],
            'cco' => ['nullable', 'max:255', 'string'],
            'body' => ['required', 'string'],
            'code' => ['nullable', 'max:255'],
        ];
    }
}
