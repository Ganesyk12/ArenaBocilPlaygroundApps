<?php
defined('BASEPATH') or exit('No direct script access allowed');

$config['migration_enabled'] = TRUE;

/*
|--------------------------------------------------------------------------
| Migration Type
|--------------------------------------------------------------------------
|
| Migration file names may be based on a sequential identifier or on
| a timestamp. Options are:
|
|   'sequential' = Sequential migration naming (001_add_blog.php)
|   'timestamp'  = Timestamp migration naming (20121031104401_add_blog.php)
|                  Use timestamp format YYYYMMDDHHIISS.
|
| Note: If this configuration value is missing the Migration library
|       defaults to 'sequential' for backward compatibility with CI2.
|
*/
$config['migration_type'] = 'sequential';

$config['migration_table'] = 'migrations';

$config['migration_auto_latest'] = TRUE;

$config['migration_version'] = 10;

$config['migration_path'] = APPPATH . 'migrations/';
