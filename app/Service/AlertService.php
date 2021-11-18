<?php

namespace App\Service;

class AlertService
{
    public static function sendError($errorMessage, $errorCode)
    {
        return [
            'data' => [
                'status' => 'error',
                'errors' => [
                    'error' => [$errorMessage],
                ],
            ],
            'code' => $errorCode,
        ];
    }

}
