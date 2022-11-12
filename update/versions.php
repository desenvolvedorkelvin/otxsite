<?php
function file_crc($file)
{
    $file_string = file_get_contents($file);

    $crc = crc32($file_string);
   
    return sprintf("%u", $crc);
}


$dat = '/var/www/update/TibianOld.dat';

echo 'DealTibia.dat '.file_crc($dat).'';

?>
