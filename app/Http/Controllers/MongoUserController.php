<?php

namespace App\Http\Controllers;

use App\Models\MongoUser;
use Illuminate\Support\Facades\Hash;

class MongoUserController extends Controller
{
    public static $model = MongoUser::class;

    /**
     * Check existing MongoDB password hash
     * @return array
     */
    public function checkPassword(): array
    {
        $model = new static::$model;
        $resource = $model::with($model::getItemWith())->where('email', '=', 'admin@admin.com')->first();
        $data = 'not match';

        if (Hash::check('password', $resource->password)) {
            $data = 'password match';
        }

        return [
            'data' => $data,
            'resource' => $resource
        ];
    }
}
