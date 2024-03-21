<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Requests\CreateRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class ShowController extends Controller
{
    public function __invoke()
    {
        return redirect()->back();
    }
}
