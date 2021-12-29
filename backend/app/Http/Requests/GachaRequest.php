<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class GachaRequest extends FormRequest
{
    /**
     * ルート引数は対象にならないのでマージする
     * @return array
     */
    public function validationData()
    {
        $params = $this->all();
        $routeParams = $this->route()->parameters();
        return $params + $routeParams;
    }

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
            'rolls' => 'required|max:10',
        ];
    }

    /**
     * 定義済みバリデーションルールのエラーメッセージ取得
     *
     * @return array
     */
    public function messages()
    {
        return [
            'rolls.required' => '回数が指定されていません。',
            'rolls.max' => '1~10までの値を指定してください。',
        ];
    }
}
