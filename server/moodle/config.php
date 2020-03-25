<?php  // Moodle configuration file
ini_set ('display_errors', 'on'); ini_set ('log_errors', 'on'); ini_set ('display_startup_errors', 'on'); ini_set ('error_reporting', E_ALL);
unset($CFG);
global $CFG;
$CFG = new stdClass();

$CFG->dbtype    = 'mariadb';
$CFG->dblibrary = 'native';
$CFG->dbhost    = 'localhost';
$CFG->dbname    = 'moodle';
$CFG->dbuser    = 'root';
$CFG->dbpass    = 'root123#';
$CFG->prefix    = 'mdl_';
$CFG->dboptions = array (
  'dbpersist' => 0,
  'dbport' => '',
  'dbsocket' => '',
  'dbcollation' => 'utf8mb4_unicode_ci',
);

$CFG->wwwroot   = 'http://localhost';
$CFG->dataroot  = 'C:\\xampp\\htdocs\\Moodle\\server\\moodledata';
$CFG->admin     = 'admin';

$CFG->directorypermissions = 0777;
ini_set ('display_errors', 'on'); ini_set ('log_errors', 'on'); ini_set ('display_startup_errors', 'on'); ini_set ('error_reporting', E_ALL);
require_once(__DIR__ . '/lib/setup.php');

// There is no php closing tag in this file,
// it is intentional because it prevents trailing whitespace problems!
