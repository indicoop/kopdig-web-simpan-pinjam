<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\Loan;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class PinjamanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(): JsonResponse
    {
        $loans = Loan::with('user')->get();

        return response()
                    ->json([
                        "status" => 200,
                        "message" => "Show all data",
                        "results" => $loans
                    ],200);
    }
}
