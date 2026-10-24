<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BladeController extends Controller
{

}
return view('post.show', [
    'var1' => 'aaa',
    'var2' => 'bbb',
    'var3' => 'ccc',
]);
