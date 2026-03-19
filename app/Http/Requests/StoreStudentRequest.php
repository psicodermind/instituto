<?php

namespace App\Http\Requests;

<<<<<<< HEAD
=======
use Illuminate\Contracts\Validation\ValidationRule;
>>>>>>> upstream/crudGenerico
use Illuminate\Foundation\Http\FormRequest;

class StoreStudentRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
<<<<<<< HEAD
        return true;
=======
        return false;
>>>>>>> upstream/crudGenerico
    }

    /**
     * Get the validation rules that apply to the request.
     *
<<<<<<< HEAD
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
=======
     * @return array<string, ValidationRule|array<mixed>|string>
>>>>>>> upstream/crudGenerico
     */
    public function rules(): array
    {
        return [
<<<<<<< HEAD
            'name'             => 'required|string|max:255',
            'email'            => 'nullable|email',
            'phone'            => 'nullable|string|max:20',
            'course'           => 'nullable|string|max:100',
            'enrollment_date'  => 'nullable|date',
=======
            //
>>>>>>> upstream/crudGenerico
        ];
    }
}
