<?php

namespace App\Http\Controllers;

use Illuminate\Http\JsonResponse;

class IndexController extends Controller
{
    public function index(): JsonResponse
    {
        return response()->json([
            'message' => 'Welcome to shopping List API',
            'version' => 'mvp'
        ]);
    }
}
