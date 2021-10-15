<?php

use Bbit\Api\Auth;

require 'vendor/autoload.php';

define('BBIT_API', true);

Auth::authenticate('test');