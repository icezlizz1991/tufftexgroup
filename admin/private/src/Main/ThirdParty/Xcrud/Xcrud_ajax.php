<?php
require_once '../../../../../bootstrap.php';
header('Content-Type: text/html; charset=' . \Main\ThirdParty\Xcrud\xcrud_config::$mbencoding);
echo \Main\ThirdParty\Xcrud\Xcrud::get_requested_instance();
