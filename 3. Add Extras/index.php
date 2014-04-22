<?php
ini_set('display_errors', TRUE);
#
# Have we already done our feature detection?
if (empty($_COOKIE['MODERNIZR'])) {
    include 'modernizr-server-plus.php';
    die;
}
#
# Grab values and convert json string to php object
$MODERNIZR = json_decode($_COOKIE['MODERNIZR']);
#
# Branch based on client-side data
if ($MODERNIZR->svg) {
    // we can use svg, which is vector and scales for all screen sizes and resolutions
    $image_src = 'http://path/to/images/my_logo.svg';
} else {
    if ($MODERNIZR->extras->devicepixelratio < 2) {
        // low-res screen
        $image_src = 'http://path/to/images/my_logo.png';
    } else {
        // hi-res screen
        $image_src = 'http://path/to/images/my_logo_2x.png';
    }
}
#
# Output test data
header('Content-Type: text/plain');
echo $image_src;
echo "\n\n####\n\n";
print_r($MODERNIZR);
