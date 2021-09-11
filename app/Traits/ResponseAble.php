<?php


namespace App\Traits;

use Illuminate\Http\Exceptions\HttpResponseException;
trait ResponseAble
{

    /**
     * @param array $data
     * @param string $message
     * @param int $code
     * @return \Illuminate\Http\JsonResponse
     */
    protected function sendResponse($data = [], $message = '', $code = 200){
        return response()->json([
                'success' => true,
                'code'    => $code,
                'data'    => $data,
                'message' => $message
        ])->setStatusCode($code);
    }

    /**
     * @param array $data
     * @param string $message
     * @param int $code
     */
    protected function sendError($data = [], $message = '', $code = 404){
        throw new HttpResponseException(
            response()->json([
                    'success' => false,
                    'code'    => $code,
                    'error'   => $data,
                    'message' => $message
            ])->setStatusCode($code)
        );
    }
}
