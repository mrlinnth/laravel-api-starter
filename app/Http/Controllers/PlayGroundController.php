<?php

namespace App\Http\Controllers;

class PlayGroundController extends Controller
{
    public function index(): array
    {
        $data = base64_encode('admin@admin.com:password');

        return [
            'data' => $data,
        ];
    }

}
