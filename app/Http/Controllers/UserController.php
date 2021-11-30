<?php

namespace App\Http\Controllers;

use App\Models\User;

class UserController extends Controller {

    public function index() {
        $data = User::find(1);
        return response()->json($data, 200);
    }
}