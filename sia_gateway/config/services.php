<?php

return [
     'site1' => [
          'base_uri' => env('USER1_SERVICE_BASE_URL'),
          'secret' => env('USER1_SERVICE_SECRET')
     ],
     'site2' => [
          'base_uri' => env('USER2_SERVICE_BASE_URL'),
          'secret' => env('USER2_SERVICE_SECRET')
     ],
];