<?php

namespace Customers\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use Customers\Http\Requests\Frontend\store;

class Customers extends Controller
{
    public function index(store $request)
    {
        // return view("customers::frontend.index");
        return loadView('customers',"frontend","index");
    }
}
