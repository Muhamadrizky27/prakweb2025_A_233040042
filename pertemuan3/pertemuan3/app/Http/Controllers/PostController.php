<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostController extends Controller

{
    public function index()
    {
        $data = [
            'posts' => 'pasundan'
        ];
    }

    public function create()
    {
        return ('Ini adalah Post dengan method create');
    }
    
}
