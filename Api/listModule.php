<?php

chdir ( ' .. ' );
include_once  ' service / ModuleService.php ' ;
en-tête ( ' Content-type: application / json ' );
$ss  =  new ModuleService ();
echo  json_encode ( $ss -> findAllApi ());

