<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class EditCompanyDetailsRequest extends FormRequest
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
            'email' => 'bail|required|email',
            'company_name' => 'bail|required',
            'mobile' => 'bail|required',
            'logo' => 'bail|image',
            'about_us_image' => 'bail|image|max:700',
            'landing_page_background' => 'bail|image|max:700',
        ];
    }
}
