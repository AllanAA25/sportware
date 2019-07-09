<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class EditMedicalReportRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'visit_reason' => 'required|max:255',
            'diagnostic' => 'required',
            'treatment' => 'required'
        ];
    }
}
