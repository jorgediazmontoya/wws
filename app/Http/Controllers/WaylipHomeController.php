<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WaylipHomeController extends Controller
{
    public function index()
    {
        return view('home/index');
    }

    public function search()
    {
        dd('hola');
        $searchResponse = 'patata';

        return view('home/index')
        ->with([
            'searchResponse' => $searchResponse
        ]);
    }

}
