<?php
require_once 'src/SameSite.php';

use Skorp\Dissua\SameSite;

$dd = new SameSite('Mozilla/5.0 (Macintosh; U; Intel Mac OS X 10_6_3) AppleWebKit/534.31 (KHTML, like Gecko) Chrome/17.0.558.0 Safari/534.31 UCBrowser/3.0.0.357');
var_dump($dd->shouldSendSameSiteNone());

$dd2 = SameSite::handle('Mozilla/5.0 (Macintosh; Intel Mac OS X 10_14_5) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/79.0.3945.130');
var_dump($dd2);


