<?php

namespace Customers\Http\Controllers\frontend;

use App\Http\Controllers\Controller;

class Customers extends Controller
{
    public function index()
    {
        return view("customers::frontend.index");
    }
}
