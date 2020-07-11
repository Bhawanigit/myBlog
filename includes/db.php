



<?php

$db['db_host'] = "localhost";
$db['db_user'] = "B.Khadka";
$db['db_pass'] = "ZqFhXMAv";
$db['db_name'] = "bkhadkadb";
 

 foreach($db as $key => $value) {
 	 define(strtoupper($key), $value);
}
 $connection = mysqli_connect (DB_HOST, DB_USER, DB_PASS, DB_NAME);

?>