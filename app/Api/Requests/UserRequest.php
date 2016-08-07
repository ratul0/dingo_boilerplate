<?php
/**
 * Created by PhpStorm.
 * User: rat
 * Date: 8/8/2016
 * Time: 3:19 AM
 */

namespace Api\Requests;


use Dingo\Api\Http\FormRequest;
class UserRequest extends FormRequest
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
            'name' => 'required|max:255',
            'email' => 'required|email|max:255|unique:users',
            'password' => 'required|confirmed|min:4',
        ];
    }
}