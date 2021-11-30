<?php

namespace App\Http\Controllers;


class MainController extends Controller
{
    /**
     * simple call
     *
     * 
     * @return Response
     */
    public function index()
    {
        return ["msg" => "working"];
    }
}