<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;

class NilaiRequest extends FormRequest
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
            'mahasiswa_id' => 'required|int|max:5',
            'kriteria_id' => 'required|int|max:5',
            'sub_kriteria_id' => 'required|int|max:5',
        ];
    }
}
