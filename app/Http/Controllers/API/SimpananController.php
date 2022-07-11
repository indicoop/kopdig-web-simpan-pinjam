<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\Stash;
use Illuminate\Http\JsonResponse;

class SimpananController extends Controller
{

    public function index(): JsonResponse
    {
        $loans = Stash::with('user','cooperative')->get();

        return response()
                    ->json([
                        "status" => 200,
                        "message" => "Show all data",
                        "results" => $loans
                    ],200);
    }
}
