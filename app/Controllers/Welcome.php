<?php

namespace App\Controllers;

use Sentgine\Ray\Controller;
use Sentgine\Ray\Http\Request;

class Welcome extends Controller
{
    public function index(Request $request)
    {
        return $this->view('welcome', [
            'title' => 'Hikari PHP'
        ]);
    }
}
