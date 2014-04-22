<?php
ini_set('display_errors', TRUE);
#
# Have we already done our feature detection?
if (empty($_COOKIE['MODERNIZR'])) {
    include 'modernizr-server-plus.php';
    die;
}
#
# Grab values
$MODERNIZR = $_COOKIE['MODERNIZR'];
#
# Output test data
header('Content-Type: text/plain');
print_r($MODERNIZR);
