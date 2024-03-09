<?php

namespace App\Facades;

use App\Services\UddoktaPayService;
use Illuminate\Support\Facades\Facade;

class UddoktaPay extends Facade
{
    protected static function getFacadeAccessor()
    {
        return UddoktaPayService::class;
    }
}
