<?php

/*
  Copyright (c) 2010 Peter Schlömer

  Released under the GNU General Public License (GPL), version 2.
*/

// Parameters

$coords= explode('|',$_GET['coords']);
$active = $_GET['active'] ? 1 : 0;

if (!$_GET['coords'] || count($coords)==0) {
  die('No coordinates supplied');
}

$maxx = 1;
$maxy = 1;

for ($i=0; $i<count($coords); $i+=2) {
  $x = $coords[$i];
  $y = $coords[$i+1];
  if ($x>$maxx) $maxx = $x;
  if ($y>$maxy) $maxy = $y;
}

if ($maxx>2000) $maxx = 2000;
if ($maxy>2000) $maxy = 2000;

// Create image

$im = imagecreate($maxx, $maxy);

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
imagefilledrectangle($im,0,0,$maxx-1,$maxy-1,$transparent);

// Circle
if (count($coords)<4) {
  imagesetpixel($im,$coords[0],$coords[1],$fill);
}
elseif (count($coords)<6) {
  imageline($im,$coords[0],$coords[1],$coords[2],$coords[3],$fill);
}
else {
  imagefilledpolygon($im,$coords,count($coords)/2,$fill);
}

// Output image data

header('Content-type: image/png');
imagepng($im);
?>
