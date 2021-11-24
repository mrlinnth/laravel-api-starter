<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\Auth\AuthController;
use App\Http\Controllers\MongoUserController;
use App\Http\Controllers\PlayGroundController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\UserController;
use Dingo\Api\Routing\Router;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

/*
 * Welcome route - link to any public API documentation here
 */
//Route::get('/', function () {
//    echo 'Welcome to our API';
//});

/** @var Router $api */
$api = app('Dingo\Api\Routing\Router');
$api->version('v1', ['middleware' => ['api']], function (Router $api) {
    /*
     * Test route
     */
    $api->get('/test', [PlayGroundController::class, 'index']);

    /**
     * Status (Example API Doc)
     *
     * Check that the service is up. If everything is okay, you'll get a 200 OK response.
     *
     * Otherwise, the request will fail with a 400 error, and a response listing the failed services.
     *
     * @response 400 scenario="Service is unhealthy" {"status": "down", "services": {"database": "up", "redis": "down"}}
     * @responseField status The status of this API (`up` or `down`).
     * @responseField services Map of each downstream service and their status (`up` or `down`).
     */
    $api->get('/status', function () {
        return [
            'status' => 'up',
            'services' => [
                'database' => 'up',
                'redis' => 'up',
            ],
        ];
    });

    /*
     * Authentication
     */
    $api->group(['prefix' => 'auth'], function (Router $api) {
        $api->group(['prefix' => 'jwt'], function (Router $api) {
            $api->get('/token', [AuthController::class, 'token']);
        });
    });

    /*
     * Authenticated routes
     */
    $api->group(['middleware' => ['api.auth']], function (Router $api) {
        /*
         * Authentication
         */
        $api->group(['prefix' => 'auth'], function (Router $api) {
            $api->group(['prefix' => 'jwt'], function (Router $api) {
                $api->get('/refresh', [AuthController::class, 'refresh']);
                $api->delete('/token', [AuthController::class, 'logout']);
            });

            $api->get('/me', [AuthController::class, 'getUser']);
        });

        /*
         * Users
         */
        $api->group(['prefix' => 'users', 'middleware' => 'check_role:admin'], function (Router $api) {
            $api->get('/', [UserController::class, 'getAll']);
            $api->get('/{uuid}', [UserController::class, 'get']);
            $api->post('/', [UserController::class, 'post']);
            $api->put('/{uuid}', [UserController::class, 'put']);
            $api->patch('/{uuid}', [UserController::class, 'patch']);
            $api->delete('/{uuid}', [UserController::class, 'delete']);
        });

        /*
         * Roles
         */
        $api->group(['prefix' => 'roles'], function (Router $api) {
            $api->get('/', [RoleController::class, 'getAll']);
        });
    });

    /*
     * ServD Admins
     */
    $api->group(['prefix' => 'admins'], function (Router $api) {
        $api->get('/', [AdminController::class, 'getAll']);
        $api->get('/{uuid}', [AdminController::class, 'get']);
        $api->post('/', [AdminController::class, 'post']);
        $api->put('/{uuid}', [AdminController::class, 'put']);
        $api->patch('/{uuid}', [AdminController::class, 'patch']);
        $api->delete('/{uuid}', [AdminController::class, 'delete']);
    });

    /*
     * ServD Users
     */
    $api->group(['prefix' => 'servd-users'], function (Router $api) {
        $api->get('/', [MongoUserController::class, 'getAll']);
        $api->get('/{uuid}', [MongoUserController::class, 'get']);
        $api->post('/', [MongoUserController::class, 'post']);
        $api->put('/{uuid}', [MongoUserController::class, 'put']);
        $api->patch('/{uuid}', [MongoUserController::class, 'patch']);
        $api->delete('/{uuid}', [MongoUserController::class, 'delete']);
    });
});
