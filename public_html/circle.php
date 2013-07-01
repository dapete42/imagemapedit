<?php

/*
  Copyright (c) 2010 Peter Schlömer

  Released under the GNU General Public License (GPL), version 2.
*/

// Parameters

$radius = intval($_GET['radius']);
$active = $_GET['active'] ? 1 : 0;

if (!$radius || $radius<1 || $radius>2000) {
  die('Radius must be between 1 and 2000');
}

// Create image

$im = imagecreate($radius*2, $radius*2);

// If active, use red, otherwise black drawing color
if ($active) {
  $fill = imagecolorallocate($im,255,0,0);
}
else {
  $fill = imagecolorallocate($im,0,0,0);
}

// Transparent background
$transparent = imagecolorallocate($im,255,255,255);
imagecolortransparent($im,$transparent);
imagefilledrectangle($im,0,0,$radius*2-1,$radius*2-1,$transparent);

// Circle
imagefilledarc($im,$radius-1,$radius-1,$radius*2,$radius*2,0,360,$fill,$fill);

// Output image data

header('Content-type: image/png');
imagepng($im);

?>
