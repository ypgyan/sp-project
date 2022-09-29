<?php

namespace App\Http\Controllers;

use Illuminate\Http\JsonResponse;

class IndexController extends Controller
{
    /**
     * @return JsonResponse
     */
    public function index(): JsonResponse
    {
        return response()->json([
            'message' => 'Shopping List API',
            'version' => 'mvp'
        ]);
    }

    /**
     * @return JsonResponse
     */
    public function greetings(): JsonResponse
    {
        return response()->json([
            'message' => 'Welcome to shopping List API authenticated area'
        ]);
    }
}
