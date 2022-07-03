<?php

namespace Customers\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Customers\Http\Requests\Backend\store;

class Customers extends Controller
{
    public function index(store $request)
    {
       return loadView('customers',"backend","index");
    }
}
