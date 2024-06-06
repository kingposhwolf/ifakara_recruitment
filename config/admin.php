<?php
return [

    /*
    |--------------------------------------------------------------------------
    | Default admin user (HR and GS)
    |--------------------------------------------------------------------------
    |
    | Default user will be created at project installation/deployment
    |
    */

    'hr_name' => env('HR_NAME', ''),
    'hr_email' => env('HR_EMAIL', ''),
    'hr_role' => env('HR_ROLE', ''),
    'hr_password' => env('HR_PASSWORD', ''),

    'gs_name' => env('GS_NAME', ''),
    'gs_email' => env('GS_EMAIL', ''),
    'gs_role' => env('GS_ROLE', ''),
    'gs_password' => env('GS_PASSWORD', ''),

    'auditor_name' => env('AUDITOR_NAME', ''),
    'auditor_email' => env('AUDITOR_EMAIL', ''),
    'auditor_role' => env('AUDITOR_ROLE', ''),
    'auditor_password' => env('AUDITOR_PASSWORD', '')
];

    ?>
