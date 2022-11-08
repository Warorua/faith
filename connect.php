<?php
/* Database config */
$db_host		= 'localhost';
$db_user		= 'tsavosit_faith';
$db_pass		= '*HGLuEVnohX8';
$db_database	= 'tsavosit_faith'; 

/* End config */

$db = new PDO('mysql:host='.$db_host.';dbname='.$db_database, $db_user, $db_pass);
$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

?>