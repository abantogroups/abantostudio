<?php

namespace Abanto\AbantoStudio\Http\Controllers;

use App\Http\Controllers\Controller;

class AbantoStudioController extends Controller
{

    public function index()
    {
        return view('AbantoStudio::index');
    }
}
