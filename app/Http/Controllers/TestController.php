<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class TestController extends Controller
{
    public function TestAdd(Request $request)
    {
        $data = $request->input('data');

        $data = explode(' ', $data);

        $name = $data[0];
        $age = $data[1];
        $city = $data[2];

        $data = [
            'name' => strtoupper($name),
            'age' => $age,
            'city' => strtoupper($city),
        ];

        $user = User::create($data);

        return response()->json([
            'message' => 'success',
            'data' => $user
        ]);
    }
}
