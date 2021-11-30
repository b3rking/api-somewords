<?php

namespace App\Http\Controllers;


class MainController extends Controller
{
    /**
     * main endpoint
     *
     * 
     * @return Response
     */
    public function index()
    {
        return response()->json([
            "status" => 200,
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