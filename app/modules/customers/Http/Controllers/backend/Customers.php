<?php

namespace Customers\Http\Controllers\backend;

use App\Http\Controllers\Controller;

class Customers extends Controller
{
    public function index()
    {
       return loadView('customers',"backend","index");
    }
}
