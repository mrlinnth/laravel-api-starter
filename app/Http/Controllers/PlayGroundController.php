<?php

namespace App\Http\Controllers;

use App\Models\MongoUser;
use Illuminate\Support\Facades\Hash;

class PlayGroundController extends Controller
{
    public static $model = MongoUser::class;

    public function index(): array
    {
        $model = new static::$model;
        $resource = $model::with($model::getItemWith())->where('email', '=', 'uatmerchanttest1@yopmail.com')->first();
        $data = 'not match';

        if (Hash::check('qwer@1234', $resource->password)) {
            $data = 'password match';
        }

        return [
            'data' => $data,
            'resource' => $resource
        ];
    }

}
