<?php

$title = 'Privacy Policy';

include('header.php');

$html = implode('', file('http://www.betekenis-babynamen.nl/i/privacy-policy.php?plaintext=1&language='.preg_replace("/[^A-Za-z0-9_]/", '', $_GET['language'])));
echo $html;

include('footer.php');

