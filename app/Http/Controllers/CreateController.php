<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Requests\CreateRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class CreateController extends Controller
{
    public function __invoke(CreateRequest $request)
    {
        $url = filter_var($request->url(), FILTER_VALIDATE_URL);
        if (!$url) {
            dd('Invalid url');
        }

        $link = $this->service->generateLink($url);

        return redirect()->route('show', $link->generated_code);
    }
}
