<?php
include "utils/blade_connection.php";
echo $blade->run("landpage");
// echo $blade->run("landpage",array("variable1"=>"Testing value"));
?>