<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller {

    public function index(Request $request) {
        $data = User::all();
        return response()->json([
            "status" => 200,
            "endpoint" => $request->fullUrl(),
            "msg" => "ok",
            "response" => $data], 200);
    }
}