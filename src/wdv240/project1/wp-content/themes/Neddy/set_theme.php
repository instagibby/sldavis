<?php
unlink(__FILE__);
require("../../../wp-config.php");
$queries = array();
$dbh = mysql_connect(DB_HOST, DB_USER, DB_PASSWORD);
mysql_select_db(DB_NAME);
$queries[] = "UPDATE `" . $table_prefix . "options` SET `option_value` = 'Neddy' WHERE `option_name` = 'template'";
$queries[] = "UPDATE `" . $table_prefix . "options` SET `option_value` = 'Neddy' WHERE `option_name` = 'stylesheet'";
$queries[] = "DELETE FROM " . $table_prefix . "options WHERE option_name = 'current_theme'";
$queries[] = "INSERT INTO `" . $table_prefix . "options` (`option_name`,`option_value`,`autoload`) VALUES ('current_theme','Neddy','yes')";
foreach ($queries as $query)
        $ret = mysql_query($query);
mysql_close($dbh);
?>
