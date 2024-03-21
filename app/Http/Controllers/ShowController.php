<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Requests\CreateRequest;
use App\Models\Link;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class ShowController extends Controller
{
    public function __invoke(Request $request)
    {
        $link = Link::where('generated_code', $request->path())->first()->original_url;

        return redirect()->to($link);
    }
}
