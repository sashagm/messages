<?php

namespace Sashagm\Messages\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class DialogRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return false;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array|string>
     */
    public function rules()
    {
        return [
            'user2_id' => 'required|exists:users,id',
        ];
    }
}
