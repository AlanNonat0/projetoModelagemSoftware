<?php

namespace App\Repositories;

use Illuminate\Support\Facades\DB;

class ConnectionHelppers
{
    
    public static function testConnection()
    {
        try {
            if (DB::connection()->getPdo()) {
                return true;
            }

        } catch (\PDOException $e) {
            return false;

        }
    }
}