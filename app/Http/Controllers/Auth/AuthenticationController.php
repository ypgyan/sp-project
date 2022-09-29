<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\Signup\SignupRequest;
use Illuminate\Http\JsonResponse;

class AuthenticationController extends Controller
{
    /**
     * @param SignupRequest $request
     * @return JsonResponse
     */
    public function signup(SignupRequest $request): JsonResponse
    {
        return response()->json([
            'id' => null,
            'name' => null,
            'email' => null,
        ]);
    }
}
