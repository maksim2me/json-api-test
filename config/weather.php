<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Enabled sources
    |--------------------------------------------------------------------------
    | Enabled weather sources.
    | Используемые источники погоды.
    |
    */

    'enabled_sources' => explode(',', env('WEATHER_SOURCE_ENABLED'))
];
