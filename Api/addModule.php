<? php

chdir ( '..' );
include_once ' service / ModuleService.php ' ;
extrait ($_GET);
$ss = new ModuleService();
$ss -> create ( nouveau Module :($id ,$nom ,$note ,$coefficient,$periode ));
echo ' True ' ;

