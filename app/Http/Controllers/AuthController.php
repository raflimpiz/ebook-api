<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function me (){
        return [
            'NIS' => 1234567212345,
            'Nama' => 'Rafli Mpiz',
            'Phone' => '0899878865455678',
            'Class' => 'XII rpl 6'
        ];
    }
}
