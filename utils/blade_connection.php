<?php
include "libs/BladeOne/BladeOne.php";

use eftec\bladeone;

$views = './views';
$compiledFolder = './compiled';
$blade = new bladeone\BladeOne($views, $compiledFolder);
?>