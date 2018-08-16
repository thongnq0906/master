<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProductRequest extends FormRequest
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
            'name' => 'required|unique:products,name,',
            'price' => 'numeric|nullable|min:0',
            'cate_product_id' => 'required',
            'position' => 'numeric|min:0|nullable|unique:products,position,',
        ];
    }

    public function messages()
    {
        return [
            'cate_product_id.required' => 'Chưa tạo danh mục sản phẩm',
        ];
    }
    }
