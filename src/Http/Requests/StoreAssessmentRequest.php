<?php

namespace Lyre\School\Http\Requests;

use Lyre\Request;

class StoreAssessmentRequest extends Request
{
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'name' => 'required|string',
            'description' => 'nullable|string',

            'tasks' => 'required|array',
            'tasks.*.name' => 'required|string',
            'tasks.*.description' => 'nullable|string',

            'tasks.*.answers' => 'required|array',
            'tasks.*.answers.*.name' => 'required|string',
            'tasks.*.answers.*.description' => 'nullable|string',
            'tasks.*.answers.*.is_correct' => 'boolean',
            'tasks.*.answers.*.score' => 'integer|min:0',
        ];
    }
}

