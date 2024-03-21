<?php

namespace App\Http\Controllers;

use App\Service\LinkService;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public $service;

    /**
     * @param LinkService $service
     */
    public function __construct(LinkService $service)
    {
        $this->service = $service;
    }
}
