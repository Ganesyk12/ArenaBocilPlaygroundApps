<?php
defined('BASEPATH') or exit('No direct script access allowed');

/*
| -------------------------------------------------------------------
| AUTO-LOADER
| -------------------------------------------------------------------
| -------------------------------------------------------------------
| Instructions
| -------------------------------------------------------------------
|
| These are the things you can load automatically:
|
| 1. Packages
| 2. Libraries
| 3. Drivers
| 4. Helper files
| 5. Custom config files
| 6. Language files
| 7. Models
|
*/

$autoload['packages'] = array();

$autoload['libraries'] = array('database', 'session', 'form_validation', 'email');

$autoload['drivers'] = array();

$autoload['helper'] = array('url', 'date', 'file', 'form', 'security');

$autoload['config'] = array();

$autoload['language'] = array();

$autoload['model'] = array();
