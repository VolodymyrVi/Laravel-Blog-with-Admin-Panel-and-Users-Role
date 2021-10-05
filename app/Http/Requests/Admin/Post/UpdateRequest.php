<?php

namespace App\Http\Requests\Admin\Post;

use Illuminate\Foundation\Http\FormRequest;

class UpdateRequest extends FormRequest
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
            'title' => 'required|string',
            'content' => 'required|string',
            'preview_image' => 'nullable|file',
            'main_image' => 'nullable|file',
            'category_id' => 'required|integer|exists:categories,id',
            'tag_ids' => 'nullable|array',
            'tag_ids.*' => 'nullable|integer|exists:tags,id'
        ];
    }

    public function messages()
    {
        return [
            'title.required' => 'Це поле обовязкове до заповнення',
            'title.string' => 'Дані мають відповідати строковому типу',
            'content.required' => 'Це поле обовязкове до заповнення',
            'content.string' => 'Дані мають відповідати строковому типу',
            'preview_image.required' => 'Це поле обовязкове до заповнення',
            'preview_image.file' => 'Необхідно вибрати файл',
            'main_image.required' => 'Це поле обовязкове до заповнення',
            'main_image.file' => 'Необхідно вибрати файл',
            'category_id.required' => 'Це поле обовязкове до заповнення',
            'category_id.integer' => 'Id має бути числом',
            'category_id.exists' => 'Id має бути в базі даних',
            'tags_ids.array' => 'Необхідно відправити масив даних'
        ];
    }
}
