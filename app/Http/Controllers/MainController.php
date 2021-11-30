<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MainController extends Controller
{
    /**
     * main endpoint
     *
     * 
     * @return Response
     */
    public function index(Request $request)
    {
        return response()->json([
            "status" => 200,
            "endpoint" => $request->fullUrl(),
            "msg" => "ok",
            "response" => [
                "app name" => "somewords",
                "version" => "1.0.2",
                "author" => "b3rking",
                "api specs" => [
                    "version" => "0.1",
                    "language" => "english",
                    "tech" => "php"
                ]
            ]
        ], 200, []);
    }
}