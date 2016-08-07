<?php

namespace App\Http\Controllers\Auth;


use App\Http\Controllers\BaseController;
use App\User;
use Illuminate\Http\Request;
use Tymon\JWTAuth\Facades\JWTAuth;
use Validator;

class AuthController extends BaseController
{
    private $request;
    public function __construct(Request $request)
    {
        $this->request = $request;
    }

    public function login(){
        $credentials = $this->request->only('email','password');
        try {
            // attempt to verify the credentials and create a token for the user
            if (! $token = JWTAuth::attempt($credentials)) {
                return $this->response->errorUnauthorized();
            }
        } catch (JWTException $e) {
            // something went wrong whilst attempting to encode the token
            return $this->response->errorInternal();
        }

        // all good so return the token
        return $this->response->array(compact('token'))->setStatusCode(200);    }
}
