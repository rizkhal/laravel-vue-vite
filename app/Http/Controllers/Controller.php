<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function errorJson($code, $message, $httpCode = Response::HTTP_INTERNAL_SERVER_ERROR)
    {
        return response()->json([
            'code' => $code,
            'message' => $message,
        ], $httpCode);
    }
}
