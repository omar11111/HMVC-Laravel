<?php
//   function to build the prefix of root
   function buildPrefix(string $modelName,string $type="backend")
  {
   return config($modelName.".prefix.".$type,config("modulesprefix.prefix.".$type))."/".config($modelName.".model-name");
  }
?>
