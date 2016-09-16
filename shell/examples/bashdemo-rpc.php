<?php

require('json-rpc.php');

if (function_exists('xdebug_disable')) {
    xdebug_disable();
}

class BashDemo {
  public function cmd($cmd) {
     $result=shell_exec($cmd);
     return $result;			
  }
}

handle_json_rpc(new BashDemo());

?>
