<?php
/* Redirect browser */
define('URL', 'http://crm-softbuilder.rhcloud.com/');
header('Location: '.URL.'php/portal/index.php', TRUE, 302); 

/* Make sure that code below does not get executed when we redirect. */

exit;
?>
