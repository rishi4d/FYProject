<?php

/**
 * Reads the requested portion of a file and sends its contents to the client with the appropriate headers.
 *
 * This HTTP_RANGE compatible read file function is necessary for allowing streaming media to be skipped around in.
 *
 * @param string $location
 * @param string $filename
 * @param string $mimeType
 * @return void
 *
 * @link https://groups.google.com/d/msg/jplayer/nSM2UmnSKKA/Hu76jDZS4xcJ
 * @link http://php.net/manual/en/function.readfile.php#86244
 */

function smartReadFile($location, $filename){}