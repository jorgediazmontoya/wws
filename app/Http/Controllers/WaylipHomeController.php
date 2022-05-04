<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WaylipHomeController extends Controller
{
  public function index()
  {
    $options = array(
      'forma' => ['Capsulas líquidas', 'Jarabes'],
      'presentacion' => ['200ml', '500ml'],
      'cantidad' => ['Caja x 10', 'Unidad']
    );

    return view('home/index')->with([
      'options' => $options
    ]);
  }

  public function search()
  {
  }

}
