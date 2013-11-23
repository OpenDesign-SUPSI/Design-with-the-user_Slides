<?php #!/usr/bin/env /usr/bin/local/bin/php
error_reporting(E_ALL);
ini_set('display_errors', '1');
set_time_limit(0);
 
try {
 
  $payload = json_decode($_REQUEST['payload']);
 
}
catch(Exception $e) {
 
    //log the error
    file_put_contents('/home/openp2pdesign/supsi.openp2pdesign.org/2013-2014/Design-with-the-user_Slides/logs/github.txt', $e . ' ' . $payload, FILE_APPEND);
 
      exit(0);
}
 
if ($payload->ref === 'refs/heads/master') {
 
    $project_directory = '/home/openp2pdesign/supsi.openp2pdesign.org/2013-2014/Design-with-the-user_Slides';
 
    $output = shell_exec("/home/openp2pdesign/supsi.openp2pdesign.org/2013-2014/Design-with-the-user_Slides/git-puller.sh");
 
    //log the request
    file_put_contents('/home/openp2pdesign/supsi.openp2pdesign.org/2013-2014/Design-with-the-user_Slides/logs/github.txt', $output, FILE_APPEND);
 
}
?>
