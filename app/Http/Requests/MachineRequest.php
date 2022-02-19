<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class MachineRequest extends FormRequest
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
            'id' => 'required|digits:5',
            'model' => 'max:30',
            'factory_number' => 'max:30',
            'production_year' => 'nullable|digits:4',
            'company_manufacturer' => 'max:50',
            'workshop_id' => 'integer'
        ];
    }
}
