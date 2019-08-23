<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Foundation\Auth\AuthenticatesUsers;

class apiPagos extends Controller
{
    //
    public function index($user,$password){

        if (\Auth::attempt(['email' => $user, 'password' => $password])) {
            // Authentication passed...import Button from './../../components/Button/Button';
            //return redirect()->intended('dashboard');
            // $sql = 'SELECT id FROM users WHERE email = "'.$user.'";';
            // $resp = DB::select($sql);
            // return $resp[0]->id;
            $id = \Auth::user()->id;
            return response($id)->header('Access-Control-Allow-Origin',"*");
        }
        return 0;
    }
}
