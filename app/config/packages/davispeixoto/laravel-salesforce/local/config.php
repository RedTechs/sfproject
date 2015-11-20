<?php
return array(

    /*
    |--------------------------------------------------------------------------
    | Your Salesforce credentials
    |--------------------------------------------------------------------------
    |
    |
    */

//    sandbox
    'username' => $_ENV['SF_USER'],
    'password' => $_ENV['SF_PASS'],
    'token'    => $_ENV['SF_TOKE'],
    'wsdl'     => storage_path() . '/wsdl/wsdl.xml',
);
