<?php
function str_contains($haystack, $needle)
{

}





testStrContains('Hallo', 'Ha', true);
testStrContains('Hallo', 'ha', false);
testStrContains('Hallo', 'all', true);
testStrContains('Hallo', 'Hallo und noch mehr', false);

// testStrContains('Hallo', '', ???);