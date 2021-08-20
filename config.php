<?php  // Moodle configuration file

unset($CFG);
global $CFG;
$CFG = new stdClass();

$CFG->dbtype    = 'mariadb';
$CFG->dblibrary = 'native';
$CFG->dbhost    = 'localhost';
$CFG->dbname    = 'admin_unamath2021';
$CFG->dbuser    = 'unamath2021';
$CFG->dbpass    = 'sG0d8z~6';
$CFG->prefix    = 'cocoon_';
$CFG->dboptions = array (
  'dbpersist' => 0,
  'dbport' => 8889,
  'dbcollation' => 'utf8_general_ci',
);

$CFG->wwwroot   = 'https://unamath.com';
$CFG->dataroot  = '/var/www/vhosts/unamath.com/moodledata';
$CFG->admin     = 'admin';

$CFG->directorypermissions = 0777;

require_once(__DIR__ . '/lib/setup.php');

// There is no php closing tag in this file,
// it is intentional because it prevents trailing whitespace problems!
