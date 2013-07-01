<?php

header('Content-type: text/javascript; encoding=utf8');

print "// This combines jquery.js and ime.js into one file.\n";
print "// The result is released under the GPL Version 2.\n\n";
print file_get_contents('jquery.js');
print "\n\n";
print file_get_contents('ime.js');

?>



