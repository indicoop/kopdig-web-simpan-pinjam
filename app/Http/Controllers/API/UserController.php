<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index($id)
    {
        $users = User::where('id', $id)->get();

        return response()
                    ->json([
                        "data" => $users
                    ],200);
    }
}
