<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class userController extends Controller
{
    public function index()
    {
        $users = [
            'nome' => [
                'Estefany Alessandra',
                'Alessandra Lindoso'
            ]
        ];

        dd($users);
    }

    public function show($id)
    {
        dd('Id do usuário é ' . $id);
    }
}
