<?php

namespace App\Http\Controllers\Backend\Action;


use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Backend\BaseController;
use App\Domain\Core\GlobalFunctionInterface;

class LoginController extends BaseController implements GlobalFunctionInterface
{
    private $auth;

    /**
     * Create a new AuthController instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth:api', ['except' => ['login']]);
        $this->auth = auth('api');
    }

    /**
     * Get a JWT via given credentials.
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function login()
    {
        $credentials = request(['username', 'password']);

        if (! $token = $this->auth->attempt($credentials)) {
            return $this->sendResponse([
                self::CODE => 401,
                self::DATA => 'Unauthorized'
            ]);
        }

        return $this->respondWithToken($token);
    }

    /**
     * Get the authenticated User.
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function me()
    {
        return $this->sendResponse([
            self::CODE => 200,
            self::DATA => $this->auth->user()
        ]);
    }

    /**
     * Log the user out (Invalidate the token).
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function logout()
    {
        $this->auth->logout();

        return $this->sendResponse([
            self::CODE => 200,
            self::DATA => 'Successfully logged out'
        ]);
    }

    /**
     * Refresh a token.
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function refresh()
    {
        return $this->respondWithToken($this->auth->refresh());
    }

    /**
     * Get the token array structure.
     *
     * @param  string $token
     *
     * @return \Illuminate\Http\JsonResponse
     */
    protected function respondWithToken($token)
    {

        return $this->sendResponse([
            self::CODE => 200,
            self::DATA => [
                'access_token' => $token,
                'token_type' => 'bearer',
                'expires_in' => Carbon::now()->addSeconds($this->auth->factory()->getTTL() * 60 * 3)->format('Y-m-d\TH:i:s')
            ]
        ]);
    }
}
