<?php

//$output = shell_exec('ls -lart');
//echo "<pre>$output</pre>";

print("<PRE>");
echo shell_exec("sh PATCH_SUPEE-9652_v2-2017-02-07-01-18-38.sh -R");
print("</PRE>");
echo "Done";


//echo shell_exec('sh PATCH_SUPEE-9652_v2-2017-02-07-01-18-38.sh -R');